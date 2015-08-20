<?php
class OverviewAction extends CommonAction{
    public function index(){
        if(!is_file(APP_PATH."/Data/install.lock")) {
            return;
        }

        $this->assign("isDebug", APP_DEBUG ? 'true' : 'false');
        $this->assign("APP_DEBUG", APP_DEBUG);

        $this->assign("siteTitle", "MILES");

        $loadedApps = F("loadedApp");
        $this->assign("loadedApps", $loadedApps);
        $this->assign("loadedAppsStr", implode("','",$loadedApps));

        //静态资源
        import("@.ORG.staticRuntime");
        $runtime = new FrontEndRuntime($loadedApps);

        $javascripts = $runtime->getJavascripts();

        if(!APP_DEBUG) {
            $javascripts = array(
                U('FrontendRuntime/read?compileJS=compile.js')
            );
        }

        $javascripts[] = U('FrontendRuntime/read?js=common/base/app.js');
        
        $this->assign("javascripts", $javascripts);

        if($this->isLogin()) {
            $this->assign("APP_PATH", str_replace("index.php", "", __APP__));
            $this->assign("userInfo", json_encode($this->user));
            /*if(1 == $this->user["id"])
                $this->display("miles_overview_exp");
            else*/
                $this->display("miles_overview");
        } else {
            $this->display("miles_login");
        }

    }
}
?>
