class WelcomeNotifier {


    public function send(User $u): void {


        $msg = $this->buildMessage($u);


        $this->log('sending', $u);


        Mail::send($u->email, $msg);  // DISTINTO


        $this->log('sent', $u);


    }


}




class PromoNotifier {


    public function send(User $u): void {


        $msg = $this->buildMessage($u);


        $this->log('sending', $u);


        SMS::send($u->phone, $msg);  // DISTINTO


        $this->log('sent', $u);


    }


}