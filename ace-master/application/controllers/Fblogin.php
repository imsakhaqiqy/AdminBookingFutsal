<?php
define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
// require File
require_once __DIR__ . '/path/to/facebook-php-sdk-v4/src/Facebook/autoload.php';
require_once('Facebook/FacebookSession.php');
require_once('Facebook/FacebookRequest.php');
require_once('Facebook/FacebookResponse.php');
require_once('Facebook/FacebookSDKException.php');
require_once('Facebook/FacebookRequestException.php');
require_once('Facebook/FacebookRedirectLoginHelper.php');
require_once('Facebook/FacebookAuthorizationException.php');
require_once('Facebook/GraphObject.php');
require_once('Facebook/GraphUser.php');
require_once('Facebook/GraphSessionInfo.php');
require_once('Facebook/Entities/AccessToken.php');
require_once('Facebook/HttpClients/FacebookCurl.php');
require_once('Facebook/HttpClients/FacebookHttpable.php');
require_once('Facebook/HttpClients/FacebookCurlHttpClient.php');

// load library class
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;
use Facebook\FacebookCurl;

class Fblogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
            // cek jika Login
            if($this->session->userdata('loggedin') == FALSE)
            {
                redirect('login');
            }
            $this->load->view('fblogin/dashboard',$this->data);
    }

    public function login()
    {
            // 1. Masukan app id, secret and redirect url
            ////////////////////////////////////////////
            // pada langkah ke 1, kamu akan diminta untuk memasukan App ID, App
            // Secret dan Redirect URL. App ID dan App Secret bisa kamu dapatkan
            // di halaman DASHBOARD di https://developer.facebook.com. Redirect
            // URL adalah url halaman tempat login facebook kamu.
            ////////////////////////////////////////////
            $app_id = '731442337022662';
            $app_secret = '6c1eb562a47d6552bea0895d68c96bb4';
            $redirect_url = 'http://localhost/codeigniter/ace-master/fblogin/login';

            // 2. inisialisasi, buat helper object and dapatkan session
            FacebookSession::setDefaultApplication($app_id, $app_secret);
            $helper = new FacebookRedirectLoginHelper($redirect_url);
            $sess = $helper->getSessionFromRedirect();

            // 3. cek validasi akun pengguna
            if($this->session->userdata('fb_token'))
            {
                $sess = new FacebookSession($this->session->userdata('fb_token'));

                try
                {
                    $sess->Validate($id, $secret);
                }
                catch(FacebookAuthorizationException $e)
                {
                    print_r($e);
                }
            }

            $this->data['loggedin'] = FALSE;
            // login url
            $this->data['login_url'] = $helper->getLoginUrl(array('email'));

            // 4. jika fb session ada maka buat session pengguna
            if(isset($sess))
            {
                $this->session->set_userdata('fb_token', $sess->getToken());
                $request = new FacebookRequest($sess, 'GET', '/me');
                $response = $request->execute();
                $graph = $response->getGraphObject(GraphUser::classname());
                $sess_data = array(
                    'id' => $graph->getId(),
                    'name' => $graph->getName(),
                    'email' => $graph->getProperty('email'),
                    'image' => 'https://graph.facebook.com/'.$graph->getId(),'/picture?width=50',
                    'loggedin' => TRUE
                );
                $this->session->set_userdata($sess_data);

                redirect('fblogin');
            }
            $this->load->view('fblogin',$this->data);
    }

    public function logout()
    {
        // logout
        $sess_data = array(
            'id' => NULL,
            'email' => NULL,
            'image' => NULL,
            'loggedin' => FALSE
        );
        $this->session->unset_userdata($sess_data);

        delete_cookie('ci_session');

        redirect('fblogin/login');
    }
}
