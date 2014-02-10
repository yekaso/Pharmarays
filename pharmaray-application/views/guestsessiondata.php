<?php

if ($this->session->userdata('memberid') != '') {
    //  redirect(base_url() . 'sys_admin/user_authorization/reloadwelcomepage');
    redirect(base_url() . 'sys_admin/user_authorization/reloadwelcomepage');
}
log_message('info', 'The session id is ========>' . $this->session->userdata('session_id') . ' and the member id is =======>' . $this->session->userdata('memberid'));
?>
