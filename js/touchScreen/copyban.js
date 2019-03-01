 //        设置当前输入框的标识
        function setInputFlag() {
            var arr=nodeArray();
            var arrLength=arr.length;

            var input = document.getElementsByTagName('input');
            var textarea = document.getElementsByTagName('textarea');
            for (var i = 0; i < input.length; i++) {
                input[i].onfocus = function () {
                    // 当input输入框获得了焦点的时候，让当前输入框设置一个自定义标识flag
                    for(var k=1;k<=arr.length;k++){
                        if(arr[k-1]==this){
//                            currentNode_index是当前获得焦点的第几个输入框，currentNode_index为0代表是第一个，currentNode_index==arrLength代表最后一个
                            var currentNode_index=k;
                            jsToAndroidStyle.setNextOrPrevEnble(arrLength,currentNode_index);
                        }
                    }

                    for (var j = 0; j < input.length; j++) {
                        input[j].removeAttribute('flag');
                    }
                    for (var l = 0; l < textarea.length; l++) {
                        textarea[l].removeAttribute('flag');
                    }
                    this.setAttribute('flag', 'current');

                    console.log(this);
                    //循环找出有标识的那个Input输入框的下标
                    for (var k = 0; k < input.length; k++) {
                        var flag=input[k].getAttribute('flag');
                        if(flag=='current'){
                            // 利用会话存储储存下标，当失去焦点的时候也可以使用
                            sessionStorage.setItem("index", k);
                        }
                    }
                };
            }

            for (var i = 0; i < textarea.length; i++) {
                textarea[i].onfocus = function () {
                    // 如果textarea获得了焦点，就让之前input记录的index标识为noInput,以此来区分当前是哪种输入框获得焦点
                    sessionStorage.setItem("index", 'noInput');
                    for (var j = 0; j < textarea.length; j++) {
                        textarea[j].removeAttribute('flag');
                    }
                    for (var l = 0; l < input.length; l++) {
                        input[l].removeAttribute('flag');
                    }
                    this.setAttribute('flag', 'current');
                    for(var k=1;k<=arr.length;k++){
                        if(arr[k-1]==this){
//                            currentNode_index是当前获得焦点的第几个输入框，currentNode_index为0代表是第一个，currentNode_index==arrLength代表最后一个
                            var currentNode_index=k;
                            jsToAndroidStyle.setNextOrPrevEnble(arrLength,currentNode_index);
                        }
                    }
                    //循环找出有标识的那个textarea输入框的下标
                    for (var k = 0; k < textarea.length; k++) {
                        var flag=textarea[k].getAttribute('flag');
                        if(flag=='current'){
                            // 利用会话存储储存下标，当失去焦点的时候也可以使用
                            sessionStorage.setItem("textareaIndex", k);
                        }
                    }
                };
            }
        }

        //        点击剪贴板内容设置内容到输入框里面
        function setValue(data) {
            //获取安卓传来的数据data
            var data = data.trim();
            var reg=new RegExp(" ","g");
            data=data.replace(reg,"\n\n");

            var index=sessionStorage.getItem("index");
            var input = document.getElementsByTagName('input');
            if(index=='noInput'){
                // 表示没有input输入框获得焦点,textarea获得了焦点
                var textareaIndex=sessionStorage.getItem("textareaIndex");
                var textarea = document.getElementsByTagName('textarea');
                var positionForTextArea=getPositionForTextArea(textarea[textareaIndex]);
                var value_left=textarea[textareaIndex].value.substring(0,positionForTextArea);
                var value_right=textarea[textareaIndex].value.substring(positionForTextArea);
                console.log(value_right.length);
                textarea[textareaIndex].value=value_left+data+value_right;
                setCaretPosition(textarea[textareaIndex],textarea[textareaIndex].value.length-value_right.length)
            }else{
                var positionForInput=getPositionForInput(input[index]);
                // 表示输入框input获得了焦点
                var attr=input[index].getAttribute('type');
                if(attr=='text'|| attr=='textarea'){
                    var value_left=input[index].value.substring(0,positionForInput);
                    var value_right=input[index].value.substring(positionForInput);
                    console.log(value_right.length);
                    input[index].value=value_left+data+value_right;
                    setCaretPosition(input[index],input[index].value.length-value_right.length)
                }
            }
        }

        //        单行文本框
        function getPositionForInput(currentInput) {
            var currentCursor_index = 0;
            if (document.selection) { // IE Support
                currentInput.focus();
                var Sel = document.selection.createRange();
                Sel.moveStart('character', -currentInput.value.length);
                currentCursor_index = Sel.text.length;
            } else if (currentInput.selectionStart || currentInput.selectionStart == '0') {// Firefox support
                currentCursor_index = currentInput.selectionStart;
            }
            return (currentCursor_index);
        }

        function setCaretPosition(ctrl, pos){
            if(ctrl.setSelectionRange)
            {
                ctrl.focus();
                ctrl.setSelectionRange(pos,pos);
            }
            else if (ctrl.createTextRange) {
                var range = ctrl.createTextRange();
                range.collapse(true);
                range.moveEnd('character', pos);
                range.moveStart('character', pos);
                range.select();
            }
        }


        //        多行文本框
        function getPositionForTextArea(currentTextarea) {
            var currentCursor_index = 0;
            if (document.selection) {// IE Support
                currentTextarea.focus();
                var Sel = document.selection.createRange();
                var Sel2 = Sel.duplicate();
                Sel2.moveToElementText(currentTextarea);
                var currentCursor_index = -1;
                while (Sel2.inRange(Sel)) {
                    Sel2.moveStart('character');
                    currentCursor_index++;
                }
            } else if (currentTextarea.selectionStart || currentTextarea.selectionStart == '0') {// Firefox support
                currentCursor_index = currentTextarea.selectionStart;
            }
            return (currentCursor_index);
        }

        //         nodeArray方法一定要在页面加载完节点之后才进行调用的，不然获取的是空数组
        function nodeArray(){
            //        遍历页面所有节点
            function getAllNode() {
                var objs = document.all;
                var length1;
                for (var i = 0; i < objs.length; i++) {
                    var obj = objs[i].tagName;
                    if (obj == "body" || obj == "BODY") {
                        length1 = i+1;
                        break;
                    }
                }
                var b_objs = new Array();
                for (var j = length1; j < objs.length; j++) {
                    b_objs.push(objs[j]);
                }
                return b_objs;
            }
            var allNode=getAllNode();//调用方法获得页面所有节点
            var arr=[];//用一个空数组来接收下面循环符合要求的节点
//        循环遍历找出是input和textarea的节点
            for(var i=0;i<allNode.length;i++){
                if(allNode[i].nodeName=='INPUT'||allNode[i].nodeName=='TEXTAREA'){
                    if(allNode[i].nodeName=='INPUT'){
                        var type=allNode[i].getAttribute('type');
                        if(type=='text'||type=='textarea'||type=='password'){
                            arr.push(allNode[i]);
                        }
                    }else{
                        arr.push(allNode[i]);
                    }
                }
            }
            return arr;
        }

        //        点击下一项
        function nextInput() {
            var arr=nodeArray();
            var input = document.getElementsByTagName('input');
            var textarea = document.getElementsByTagName('textarea');
            arr
            input
            textarea

            //循环找出有标识的那个Input输入框的下标
            for (var i = 0; i < input.length; i++) {
                var flag=input[i].getAttribute('flag');
                if(flag=='current'){
                    for(var j=0;j<arr.length-1;j++){
                        if(input[i]==arr[j]){
                            arr[j+1].focus()
                            return;
                        }

                    }
                }



            };
            //循环找出有标识的那个textarea输入框的下标
            for (var k = 0; k < textarea.length; k++) {
                var flag=textarea[k].getAttribute('flag');
                if(flag=='current'){
                    for(var j=0;j<arr.length-1;j++){
                        if(textarea[k]==arr[j]){
                            arr[j+1].focus()
                            return;
                        }
                    }
                }
            }
        }

        //        点击上一项
        function prevInput() {
            var arr=nodeArray();
            var input = document.getElementsByTagName('input');
            var textarea = document.getElementsByTagName('textarea');

            //循环找出有标识的那个Input输入框的下标
            for (var i = 0; i < input.length; i++) {
                var flag=input[i].getAttribute('flag');
                if(flag=='current'){
                    for(var j=arr.length-1;j>0;j--){
                        if(input[i]==arr[j]){
                            arr[j-1].focus()
                            return;
                        }
                    }
                }
            };
            //循环找出有标识的那个textarea输入框的下标
            for (var k = 0; k < textarea.length; k++) {
                var flag=textarea[k].getAttribute('flag');
                if(flag=='current'){
                    for(var j=arr.length-1;j>0;j--){
                        if(textarea[k]==arr[j]){
                            arr[j-1].focus()
                            return;
                        }
                    }
                }
            }
        }

        function nodeArray(){
            //        遍历页面所有节点
            function getAllNode() {
                var objs = document.all;
                var length1;
                for (var i = 0; i < objs.length; i++) {
                    var obj = objs[i].tagName;
                    if (obj == "body" || obj == "BODY") {
                        length1 = i+1;
                        break;
                    }
                }
                var b_objs = new Array();
                for (var j = length1; j < objs.length; j++) {
                    b_objs.push(objs[j]);
                }
                return b_objs;
            }
            var allNode=getAllNode();//调用方法获得页面所有节点
            var arr=[];//用一个空数组来接收下面循环符合要求的节点
//        循环遍历找出是input和textarea的节点
            for(var i=0;i<allNode.length;i++){
                if(allNode[i].nodeName=='INPUT'||allNode[i].nodeName=='TEXTAREA'){
                    if(allNode[i].nodeName=='INPUT'){
                        var type=allNode[i].getAttribute('type');
                        if(type=='text'||type=='textarea'||type=='password'){
                            arr.push(allNode[i]);
                        }
                    }else{
                        arr.push(allNode[i]);
                    }
                }
            }
            return arr;
        }