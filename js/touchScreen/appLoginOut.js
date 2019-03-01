function appLeave(url) {
    //var url='http://192.168.1.102:8090/Home/login.action?space=2';
    var exit_home=$('.exit_home');
    exit_home.click(function(){
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
        var type_03 ;
        if(isAndroid==1)
        {
            try{
                window.jsToAndroidStyle.jumpToLogin();
            }catch (e) {
                window.location.href = url;
            }

        }
        else if(isiOS==1){
            try{
                JSCalliOSLoginOut();
            }catch (e) {
                window.location.href = url;
            }
        }
        else{
            window.location.href = url;
        }
    });
}
appLeave();
