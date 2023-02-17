<?php

class Movies
{
    public $title;
    public $plot;
    public $vote;
    public $starring;

    public function __construct($_title, $_plot, $_vote, $_starring) {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->vote = $_vote;
        $this->starring = $_starring;
    }
}

$movie1 = new Movies('bill e la pietra della brezza marina', 'bill era un gabbiano fortissimo, che però era molto intimorito dai suoi avversari, dei piccioni. nonostante tutta la sua forza bill era sempre in svantaggio per colpa della disparità numerica, lui è sempre stato da solo a farsi le ossa mentre i piccioni erano una gang molto affiatata. un giorno però bill trova una pietra, la ietra della brezza marina, e grazzie ad essa la disparità non è più un problema. chi vuole intendere intenda', 10, 'bill');
// echo $movie1->title;
// echo $movie1->plot;
// echo $movie1->vote;
// echo $movie1->starring;
var_dump($movie1);

$movie2 = new Movies('tre uomini e una gamba', 'Aldo, Giovanni e Giacomo sono tre amici alle soglie dei quarant\'anni, chi più chi meno disillusi dalle loro scialbe vite. In un\'afosa estate milanese, si mettono in viaggio verso Gallipoli dove, di lì a pochi giorni, avrà luogo il matrimonio di Giacomo con la figlia del cavalier Eros Cecconi, un volgare e irascibile imprenditore romano, proprietario del negozio di ferramenta in cui tutti e tre lavorano malvolentieri, nonché già suocero di Aldo e Giovanni. I tre devono anche portare all\'uomo il suo ultimo acquisto: una scultura di legno a forma di gamba realizzata dal noto scultore Garpez. Con loro viaggia anche il cane Ringhio, un bulldog affidato dal suocero ai tre amici.', 10, 'aldo giovanni e giacomo');
// echo $movie2->title;
// echo $movie2->plot;
// echo $movie2->vote;
// echo $movie2->starring;
var_dump($movie2);
