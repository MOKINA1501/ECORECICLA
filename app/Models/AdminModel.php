<?php

/**
 * @author    Alex Díaz
 * @copyright Conectera
 * @version   v 0.0
 **/

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $request, $email, $builder;

    public function __construct()
    {
        parent::__construct();
        $this->builder                                                          =   $this->db->table('dtm_users');
        $this->validation                                                       =   \Config\Services::validation();
        $this->request                                                          =   \Config\Services::request();
        $this->email                                                            =   \Config\Services::email();
        $this->session                                                          =   session();
    }

    public function get_user($params)
    {
        if($params)
        {
            $result                                                         =   array();
            
            $this->builder->select('*');
            $this->builder->where('email', $params['email']);
            $this->builder->where('flag_drop', 0);
            
            $query                                                          =   $this->builder->get();
            $user                                                           =   $query->getRowArray();

            if($user)
            {
                if(password_verify($params['password'], $user['password'])) {

                    $result['data']                                             =   $user;
                    $result['value']                                            =   TRUE;
                    $result['message']                                          =   'Session iniciada correctamente';
                } 
                else 
                {
                    $result['data']                                             =   FALSE;
                    $result['value']                                            =   FALSE;
                    $result['message']                                          =   'Contraseña incorrecta'; 
                }
            }
            else
            {
                $result['data']                                             =   FALSE;
                $result['value']                                            =   FALSE;
                $result['message']                                          =   'No existe un usuario con este correo';
            }

            return $result;
            exit();
        }
    }

    public function get_idUser($email)
    {
        $result                                                                 =   array();

        $this->builder->select('hash_security, name');
        $this->builder->where('email', $email);
        $this->builder->where('hash_security', '');
        $this->builder->where('flag_drop', 0);
        $queries                                                                =  $this->builder->get();
        $codeSecurity                                                           =   $queries->getRowArray();

        if ($codeSecurity) 
        {
            $this->builder->select('*');
            $this->builder->where('email', $email);
            $this->builder->where('flag_drop', 0);

            $query                                                                  =   $this->builder->get();

            $user                                                                   =   $query->getRowArray();

            if($user)
            { 
                $code                                                               =   rand(1000, 9999);
                $img_head                                                           =   base_url().'/public/img/admin/mailing/head.png';
                $footer                                                             =   base_url().'/public/img/admin/mailing/footer.png';

                $this->email->setFrom('app@datamax.co', 'DATAMAX');
                $this->email->setTo($email);

                $img_head_cid                                                       =   $this->email->setAttachmentCID($img_head);
                $this->email->setSubject('Código de seguridad - Gestor DATAMAX');
                $this->email->setMessage('
                    <!DOCTYPE html>
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
                            <title>Mailing</title>
                            <style>
                                * {
                                    margin: 0;
                                    padding: 0;
                                    font-family: "quasimoda",normal;
                                    box-sizing: border-box;
                                }
                                .dtm_body {
                                    background-color: #FFFFFF;
                                    padding: 40px 0;
                                    font-family: "quasimoda", normal;
                                }
                                .row{
                                    max-width: 640px;
                                    margin: 0 auto;
                                }
                                .dtm_imgs{
                                    width: 100%;
                                    text-align: center;
                                }
                                .text-tittle {
                                    text-align: center;
                                    font: normal normal 600 20px/33px Quasimoda;
                                    letter-spacing: 0px;
                                    color: #023F87;
                                    opacity: 1;
                                }
                                .text-subtittle {
                                    text-align: center;
                                    font: normal normal normal 18px/22px Quasimoda;
                                    letter-spacing: 0px;
                                    color: #707070;
                                    opacity: 1;
                                    padding-bottom: 10px;
                                }
                                .dtm_data {
                                    text-align: center;
                                    font: normal normal bold 18px/22px Quasimoda;
                                    letter-spacing: 0px;
                                    color: #707070;
                                }
                                .user-dtm{
                                    text-align: center;
                                    text-decoration: none;
                                    font: normal normal normal 18px/22px Quasimoda;
                                    letter-spacing: 0px;
                                    color: #707070;
                                }
                                .head-password
                                {
                                    text-align: center;
                                }

                                .content-ldg
                                {
                                    background: red;
                                    heigth: 448px;
                                    padding: 0px 180px;
                                }

                            </style>
                        </head>
                        <body style="margin:0;padding:0;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                                <tr>
                                    <td align="center" style="padding:0;">
                                        <table role="presentation" style="width:602px;border-collapse:collapse;border-spacing:0;text-align:left;">
                                            <tr>
                                                <td align="center" style="padding:40px 0 30px 0;">
                                                    <img src="'.$img_head.'" alt="" width="640" style="height:auto;display:block;" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:36px 30px 42px 30px;">
                                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                        <tr>
                                                            <td style="padding:0 0 36px 0;">
                                                                <h1 style="font-size:20px;margin:0 0 8px 0;line-height:24px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¡Hola '. $user['name'] .'!</h1>
                                                                <p style="margin:0 0 32px 0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Hemos recibido tu solicitud para reestablecer la contraseña de tu cuenta en el gestor de contenido de DATAMAX.</p>
                                                                <p style="margin:0 0 8px 0;font-size:14px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#474747;">Introduce este código</p>
                                                                <p style="margin:0 0 8px 0;font-size:47px;line-height:48px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#023F87;">'. $code .'</p>
                                                                <p style="margin:0 0 16px 0;font-size:14px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#2B2B2B;">El código generado tiene una vigencia de 3 minutos, una vez pasado el tiempo debes generar un código nuevo.</p>
                                                                <p style="margin:0 0 8px 0;font-size:12px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¿No has sido tu? Asegúrate de cambiar la contraseña inmediatamente.</p>
                                                                <p style="margin:0 0 32px 0;font-size:14px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#2B2B2B;">Esta es una notificación automática, por favor no respondas este correo.</p>
                                                                <p style="margin:0;font-size:16px;line-height:10px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Gracias por ayudarnos a hacer más segura tu cuenta,</p>
                                                                <p style="margin:0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#1B6EDA;">El equipo de Datamax.</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:40px 0 30px 0;">
                                                                    <img src="'.$footer.'" alt="" width="640" style="height:auto;display:block;" />
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>                    
                        </body>
                    </html>
                ');
                
                if(!$this->email->send())
                {
                    $result['value']                                                =   FALSE;
                    $result['message']                                              =   'No se ha podido enviar el correo, por favor intentalo de nuevo más tarde.';    
                }
                else
                {
                    $this->builder->set('hash_security', $code)->where('email', $email)->where('flag_drop', 0)->update();
                    $result['value']                                                =   TRUE;
                    $result['message']                                              =   'Se ha enviado el código de verificación';    
                } 

                // die(var_dump(0));

            }
            else
            {
                $result['data']                                                     =   FALSE;
                $result['value']                                                    =   FALSE;
                $result['message']                                                  =   'No existe un usuario con este correo';
            }
        }
        else
        {
            $this->builder->select('*');
            $this->builder->where('email', $email);
            $this->builder->where('flag_drop', 0);
            $this->builder->where('hash_security !=', NULL);

            $query                                                              =   $this->builder->get();

            $email                                                              =   $query->getRowArray();

            if ($email) 
            {
                $result['value']                                                    = TRUE;
            }
            else
            {
                $result['data']                                                     =   FALSE;
                $result['value']                                                    =   FALSE;
                $result['message']                                                  =   'No existe un usuario con este correo';
            }
            
        }

        return $result;
        exit();

    }

    public function get_idUser_again($email)
    {
        $result                                                                 =   array();

        $this->builder->select('*');
        $this->builder->where('email', $email);
        $this->builder->where('flag_drop', 0);

        $query                                                                  =   $this->builder->get();

        $user                                                                   =   $query->getRowArray();

        if($user)
        { 
            $code                                                               =   rand(1000, 9999);
            $img_head                                                           =   base_url().'/public/img/admin/mailing/head.png';
            $footer                                                             =   base_url().'/public/img/admin/mailing/footer.png';

            $this->email->setFrom('app@datamax.co', 'DATAMAX');
            $this->email->setTo($email);

            $img_head_cid                                                       =   $this->email->setAttachmentCID($img_head);
            $this->email->setSubject('Código de seguridad - Gestor DATAMAX');
            $this->email->setMessage('
                <!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
                        <title>Mailing</title>
                        <style>
                            * {
                                margin: 0;
                                padding: 0;
                                font-family: "quasimoda",normal;
                                box-sizing: border-box;
                            }
                            .dtm_body {
                                background-color: #FFFFFF;
                                padding: 40px 0;
                                font-family: "quasimoda", normal;
                            }
                            .row{
                                max-width: 640px;
                                margin: 0 auto;
                            }
                            .dtm_imgs{
                                width: 100%;
                                text-align: center;
                            }
                            .text-tittle {
                                text-align: center;
                                font: normal normal 600 20px/33px Quasimoda;
                                letter-spacing: 0px;
                                color: #023F87;
                                opacity: 1;
                            }
                            .text-subtittle {
                                text-align: center;
                                font: normal normal normal 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                                opacity: 1;
                                padding-bottom: 10px;
                            }
                            .dtm_data {
                                text-align: center;
                                font: normal normal bold 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                            }
                            .user-dtm{
                                text-align: center;
                                text-decoration: none;
                                font: normal normal normal 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                            }
                            .head-password
                            {
                                text-align: center;
                            }

                            .content-ldg
                            {
                                background: red;
                                heigth: 448px;
                                padding: 0px 180px;
                            }

                        </style>
                    </head>
                    <body style="margin:0;padding:0;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                            <tr>
                                <td align="center" style="padding:0;">
                                    <table role="presentation" style="width:602px;border-collapse:collapse;border-spacing:0;text-align:left;">
                                        <tr>
                                            <td align="center" style="padding:40px 0 30px 0;">
                                                <img src="'.$img_head.'" alt="" width="640" style="height:auto;display:block;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:36px 30px 42px 30px;">
                                                <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                    <tr>
                                                        <td style="padding:0 0 36px 0;">
                                                            <h1 style="font-size:20px;margin:0 0 8px 0;line-height:24px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¡Hola '. $user['name'] .'!</h1>
                                                            <p style="margin:0 0 32px 0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Hemos recibido tu solicitud para reestablecer la contraseña de tu cuenta en el gestor de contenido de DATAMAX.</p>
                                                            <p style="margin:0 0 8px 0;font-size:14px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#474747;">Introduce este código</p>
                                                            <p style="margin:0 0 8px 0;font-size:47px;line-height:48px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#023F87;">'. $code .'</p>
                                                            <p style="margin:0 0 16px 0;font-size:14px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#2B2B2B;">El código generado tiene una vigencia de 3 minutos, una vez pasado el tiempo debes generar un código nuevo.</p>
                                                            <p style="margin:0 0 8px 0;font-size:12px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¿No has sido tu? Asegúrate de cambiar la contraseña inmediatamente.</p>
                                                            <p style="margin:0 0 32px 0;font-size:14px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#2B2B2B;">Esta es una notificación automática, por favor no respondas este correo.</p>
                                                            <p style="margin:0;font-size:16px;line-height:10px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Gracias por ayudarnos a hacer más segura tu cuenta,</p>
                                                            <p style="margin:0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#1B6EDA;">El equipo de Datamax.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" style="padding:40px 0 30px 0;">
                                                                <img src="'.$footer.'" alt="" width="640" style="height:auto;display:block;" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>                    
                    </body>
                </html>
            ');
                
            if(!$this->email->send())
            {
                $result['value']                                                =   FALSE;
                $result['message']                                              =   'No se ha podido enviar el correo, por favor intentalo de nuevo más tarde.';    
            }
            else
            {
                $this->builder->set('hash_security', $code)->where('email', $email)->where('flag_drop', 0)->update();
                $result['value']                                                =   TRUE;
                $result['message']                                              =   'Se ha enviado nuevamente el código de verificación.';    
            } 
        }
        else
        {
            $result['data']                                                     =   FALSE;
            $result['value']                                                    =   FALSE;
            $result['message']                                                  =   'No existe un usuario con este correo';
        }

        return $result;
        exit();

    }

    public function code_valid($code)
    {
        $result                                                         =   array();

        $this->builder->select('*');
        $this->builder->where('hash_security', $code);
        $this->builder->where('flag_drop', 0);

        $query                                                          =   $this->builder->get();

        $user                                                           =   $query->getRowArray();

        if ($user)
        {
            $result['data']                                             =   $user;
            $result['value']                                            =   TRUE;
        }
        else
        {
            $result['data']                                             =   FALSE;
            $result['value']                                            =   FALSE;
            $result['message']                                          =   'Código incorrecto'; 
        }

        return $result;
        exit();

    }

    public function password_new($password, $email)
    {
        $result                                                                 =   array();

        $this->builder->select('*');
        $this->builder->where('email', $email);
        $this->builder->where('flag_drop', 0);

        $query                                                                  =   $this->builder->get();
        $user                                                                   =   $query->getRowArray();

        if($user)
        { 
            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            $hora                                                               =   date('h:i');
            $day                                                                =   $dias[date('w')];
            $month                                                              =   $meses[date('n')-1];
            $dayMonth                                                           =   date('d');
            $year                                                               =   date('Y');

            $img_head                                                           =   base_url().'/public/img/admin/mailing/head.png';
            $footer                                                             =   base_url().'/public/img/admin/mailing/footer.png';
            $this->email->setFrom('app@datamax.co', 'DATAMAX');
            $this->email->setTo($email);

            $img_head_cid                                                       =   $this->email->setAttachmentCID($img_head);
            $this->email->setSubject('Actualización de contraseña - Gestor DATAMAX');
            $this->email->setMessage('
                <!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
                        <title>Mailing</title>
                        <style>
                            * {
                                margin: 0;
                                padding: 0;
                                font-family: "quasimoda",normal;
                                box-sizing: border-box;
                            }
                            .dtm_body {
                                background-color: #FFFFFF;
                                padding: 40px 0;
                                font-family: "quasimoda", normal;
                            }
                            .row{
                                max-width: 640px;
                                margin: 0 auto;
                            }
                            .dtm_imgs{
                                width: 100%;
                                text-align: center;
                            }
                            .text-tittle {
                                text-align: center;
                                font: normal normal 600 20px/33px Quasimoda;
                                letter-spacing: 0px;
                                color: #023F87;
                                opacity: 1;
                            }
                            .text-subtittle {
                                text-align: center;
                                font: normal normal normal 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                                opacity: 1;
                                padding-bottom: 10px;
                            }
                            .dtm_data {
                                text-align: center;
                                font: normal normal bold 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                            }
                            .user-dtm{
                                text-align: center;
                                text-decoration: none;
                                font: normal normal normal 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                            }
                            .head-password
                            {
                                text-align: center;
                            }

                            .content-ldg
                            {
                                background: red;
                                heigth: 448px;
                                padding: 0px 180px;
                            }

                        </style>
                    </head>
                    <body style="margin:0;padding:0;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                            <tr>
                                <td align="center" style="padding:0;">
                                    <table role="presentation" style="width:602px;border-collapse:collapse;border-spacing:0;text-align:left;">
                                        <tr>
                                            <td align="center" style="padding:40px 0 30px 0;">
                                                <img src="'.$img_head.'" alt="" width="640" style="height:auto;display:block;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:36px 30px 42px 30px;">
                                                <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                    <tr>
                                                        <td style="padding:0 0 36px 0;">
                                                            <h1 style="font-size:20px;margin:0 0 8px 0;line-height:24px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¡Hola '. $user['name'] .'!</h1>
                                                            <p style="margin:0 0 40px 0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Te informamos que tu contraseña ha sido actualizada exitosamente a las '. $hora . ' el día '. $day.', '.$dayMonth.' de '.$month.', '.$year.'.</p>
                                                            <p style="margin:0 0 8px 0;font-size:12px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¿No has sido tu? Asegúrate de cambiar la contraseña inmediatamente.</p>
                                                            <p style="margin:0 0 32px 0;font-size:14px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#2B2B2B;">Esta es una notificación automática, por favor no respondas este correo.</p>
                                                            <p style="margin:0;font-size:16px;line-height:10px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Gracias por ayudarnos a hacer más segura tu cuenta,</p>
                                                            <p style="margin:0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#1B6EDA;">El equipo de Datamax.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" style="padding:40px 0 30px 0;">
                                                                <img src="'.$footer.'" alt="" width="640" style="height:auto;display:block;" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>                    
                    </body>
                </html>
            ');

            if(!$this->email->send())
            {
                $result['value']                                                =   FALSE;
                $result['message']                                              =   'No se ha podido enviar el correo, por favor intentalo de nuevo más tarde.';    
            }
            else
            {
                $this->builder->set('password', $password)->where('email', $email)->where('flag_drop', 0)->update();
                $this->builder->set('hash_security', NULL)->where('email', $email)->where('flag_drop', 0)->update();
                $result['value']                                                =   TRUE;
                $result['message']                                              =   'Contraseña actualizada con éxito.';  
            } 

        }
        else
        {
            $result['value']                                                    =   FALSE;
            $result['message']                                                  =   'No se ha podido actualizar la contraseña.';
        }

        return $result;
        exit();
    }

    public function ressetCode($email)
    {

        $result                                                                 =   array();
        $this->builder->select('*');
        $this->builder->where('email', $email);
        $this->builder->where('flag_drop', 0);

        $query                                                                  =   $this->builder->get();
        $user                                                                   =   $query->getRowArray();

        if($user)
        { 

            $this->builder->set('hash_security', '')->where('email', $email)->where('flag_drop', 0)->update();

            $result['value']                                                    =   TRUE;
            $result['message']                                                  =   'Debe generar nuevamente el código de verificación.';

        }
        else
        {
            $result['data']                                                     =   FALSE;
            $result['value']                                                    =   FALSE;
            $result['message']                                                  =   'No existe un usuario con este correo';
        }

        return $result;
        exit();

    }

    public function change_password($id, $password, $email)
    {
        $result                                                                 =   array();

        $this->builder->select('*');
        $this->builder->where('id', $id);
        $this->builder->where('flag_drop', 0);

        $query                                                                  =   $this->builder->get();
        $user                                                                   =   $query->getRowArray();

        if($user)
        { 
            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

            $hora                                                               =   date('h:i');
            $day                                                                =   $dias[date('w')];
            $month                                                              =   $meses[date('n')-1];
            $dayMonth                                                           =   date('d');
            $year                                                               =   date('Y');

            // // die(var_dump($hora));
            // // die(var_dump($dia));
            $img_head                                                           =   base_url().'/public/img/admin/mailing/head.png';
            $footer                                                             =   base_url().'/public/img/admin/mailing/footer.png';
            $this->email->setFrom('app@datamax.co', 'DATAMAX');
            $this->email->setTo($email);

            $img_head_cid                                                       =   $this->email->setAttachmentCID($img_head);
            $this->email->setSubject('Actualización de contraseña - Gestor DATAMAX');
            $this->email->setMessage('
                <!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
                        <title>Mailing</title>
                        <style>
                            * {
                                margin: 0;
                                padding: 0;
                                font-family: "quasimoda",normal;
                                box-sizing: border-box;
                            }
                            .dtm_body {
                                background-color: #FFFFFF;
                                padding: 40px 0;
                                font-family: "quasimoda", normal;
                            }
                            .row{
                                max-width: 640px;
                                margin: 0 auto;
                            }
                            .dtm_imgs{
                                width: 100%;
                                text-align: center;
                            }
                            .text-tittle {
                                text-align: center;
                                font: normal normal 600 20px/33px Quasimoda;
                                letter-spacing: 0px;
                                color: #023F87;
                                opacity: 1;
                            }
                            .text-subtittle {
                                text-align: center;
                                font: normal normal normal 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                                opacity: 1;
                                padding-bottom: 10px;
                            }
                            .dtm_data {
                                text-align: center;
                                font: normal normal bold 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                            }
                            .user-dtm{
                                text-align: center;
                                text-decoration: none;
                                font: normal normal normal 18px/22px Quasimoda;
                                letter-spacing: 0px;
                                color: #707070;
                            }
                            .head-password
                            {
                                text-align: center;
                            }

                            .content-ldg
                            {
                                background: red;
                                heigth: 448px;
                                padding: 0px 180px;
                            }

                        </style>
                    </head>
                    <body style="margin:0;padding:0;">
                        <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                            <tr>
                                <td align="center" style="padding:0;">
                                    <table role="presentation" style="width:602px;border-collapse:collapse;border-spacing:0;text-align:left;">
                                        <tr>
                                            <td align="center" style="padding:40px 0 30px 0;">
                                                <img src="'.$img_head.'" alt="" width="640" style="height:auto;display:block;" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:36px 30px 42px 30px;">
                                                <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                    <tr>
                                                        <td style="padding:0 0 36px 0;">
                                                            <h1 style="font-size:20px;margin:0 0 8px 0;line-height:24px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¡Hola '. $user['name'] .'!</h1>
                                                            <p style="margin:0 0 40px 0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Te informamos que tu contraseña ha sido actualizada exitosamente a las '. $hora . ' el día '. $day.', '.$dayMonth.' de '.$month.', '.$year.'.</p>
                                                            <p style="margin:0 0 8px 0;font-size:12px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#2B2B2B;">¿No has sido tu? Asegúrate de cambiar la contraseña inmediatamente.</p>
                                                            <p style="margin:0 0 32px 0;font-size:14px;line-height:16px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#2B2B2B;">Esta es una notificación automática, por favor no respondas este correo.</p>
                                                            <p style="margin:0;font-size:16px;line-height:10px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:normal; color:#474747;">Gracias por ayudarnos a hacer más segura tu cuenta,</p>
                                                            <p style="margin:0;font-size:16px;line-height:20px;font-family:Rubik,Open-sans;font-syle:normal;font-weight:600; color:#1B6EDA;">El equipo de Datamax.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" style="padding:40px 0 30px 0;">
                                                                <img src="'.$footer.'" alt="" width="640" style="height:auto;display:block;" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>                    
                    </body>
                </html>
            ');

            if(!$this->email->send())
            {
                $result['value']                                                =   FALSE;
                $result['message']                                              =   'No se ha podido enviar el correo, por favor intentalo de nuevo más tarde.';    
            }
            else
            {
                $this->builder->set('password', $password)->where('id', $id)->where('flag_drop', 0)->update();
                $result['value']                                                =   TRUE;
                $result['message']                                              =   'Contraseña actualizada con éxito.';  
            } 

        }
        else
        {
            $result['value']                                                    =   FALSE;
            $result['message']                                                  =   'No se ha podido actualizar la contraseña.';
        }

        return $result;
        exit();
    }

    public function validate_password($params)
    {
        $result                                                                 =    array();

        $this->builder->select('*');
        $this->builder->where('flag_drop',0);
        $this->builder->where('id', $this->session->data['id']);

        $query                                                                  =   $this->builder->get();
        $user                                                           =   $query->getRowArray();

        if(password_verify($params['password'], $user['password']) )
        {
            $result['value']                                                    =   TRUE;
            $result['pass']                                                     =   $user['password'];
        } 
        else
        {
            $result['value']                                                    =   FALSE;
            $result['message']                                                  =   'No coincide con la contraseña actual.'; 
            $result['pass']                                                     =   '';

        }

        return $result;
        exit();
    }

}
