<?php

namespace App\Emails;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\DB;

class AppMailer
{
    protected $mailer;
    protected $fromAddress;
    protected $fromName = 'It One Informa';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    //envia email quando o status do Quote é alterado
    public function sendEmailChangeStatus($quote)
    {
        $groups = [0];
        foreach ($groups as $group) {

            $assunto = "Cotação Atualizado";
            $remetentes = DB::table('send_email')->where('group', $group)->get();

            foreach ($remetentes as $remetente) {
                $this->to = $remetente->email;
                $this->subject = $assunto;
                $this->view = 'emails.quotes.emailChangeStatus';
                $this->data = compact('quote');
                $this->deliver();
            }
        }
    }

    //envia email quando o status do pedido é alterado
    public function sendEmailChangeStatusOrder($quote)
    {
        $groups = [0];
        foreach ($groups as $group) {

            $assunto = "Pedido Atualizado";
            $remetentes = DB::table('send_email')->where('group', $group)->get();

            foreach ($remetentes as $remetente) {
                $this->to = $remetente->email;
                $this->subject = $assunto;
                $this->view = 'emails.order.emailChangeStatusOrder';
                $this->data = compact('quote');
                $this->deliver();
            }
        }
    }

    //envia email quando o PSC é cadastrado
    public function sendEmailRegisterPSC($psc)
    {
        $groups = [0];
        foreach ($groups as $group) {
            $assunto = "Novo PSC Cadastrado";
            $remetentes = DB::table('send_email')->where('group', $group)->get();

            foreach ($remetentes as $remetente) {
                $this->to = $remetente->email;
                $this->subject = $assunto;
                $this->view = 'emails.psc.emailRegisterPSC';
                $this->data = compact('psc');
                $this->deliver();
            }
        }

    }

    public function sendEmailChangeStatusPSC($psc)
    {
        $groups = [0];
        foreach ($groups as $group) {

            $assunto = "PSC Atualizado";
            $remetentes = DB::table('send_email')->where('group', $group)->get();

            foreach ($remetentes as $remetente) {
                $this->to = $remetente->email;
                $this->subject = $assunto;
                $this->view = 'emails.psc.emailChangeStatusPSC';
                $this->data = compact('psc');
                $this->deliver();
            }
        }
    }

    public function sendEmailRegisterQuote($quote)
    {
        $groups = [0, 1];
        foreach ($groups as $group) {
            $assunto = "Nova Contação Cadastrada";
            $remetentes = DB::table('send_email')->where('group', $group)->get();

            foreach ($remetentes as $remetente) {
                $this->to = $remetente->email;
                $this->subject = $assunto;
                $this->view = 'emails.quotes.emailRegisterQuote';
                $this->data = compact('quote');
                $this->deliver();
            }
        }

    }

    public function sendEmailRegisterPartNumber($partnumber)
    {
        $groups = [0];
        foreach ($groups as $group) {

            $assunto = "Nova PartNumber Cadastrada";
            $remetentes = DB::table('send_email')->where('group', $group)->get();

            foreach ($remetentes as $remetente) {
                $this->to = $remetente->email;
                $this->subject = $assunto;
                $this->view = 'emails.partnumber.emailRegisterPartNumber';
                $this->data = compact('partnumber');
                $this->deliver();
            }
        }
    }

    public function sendEmailAlteraStatusPSC($idpsc, $statuspsc, $responsepsc)
    {
        $groups = [0];
        foreach ($groups as $group) {

            $assunto = "Status da PSC Alterada";
            $remetentes = DB::table('send_email')->where('group', $group)->get();

            foreach ($remetentes as $remetente) {
                $this->to = $remetente->email;
                $this->subject = $assunto;
                $this->view = 'emails.psc.emailAlteraStatusPSC';
                $this->data = ['idpsc' => $idpsc, 'statuspsc' => $statuspsc, 'responsepsc' => $responsepsc];
                $this->deliver();
            }
        }
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function ($message) {
            $message->from(env('MAIL_USERNAME'), $this->fromName)
                ->to($this->to)->subject($this->subject);
        });
    }

}
