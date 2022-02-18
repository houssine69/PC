<?php
class Commentaire{
    protected DateTime $date;
    protected string $texte;
    protected bool $reponse;

public function __construct(Datetime $date,string $texte,bool $reponse)
{
    $this ->date = $date;
    $this ->texte = $texte;
    $this ->reponse = $reponse;
}
public fonction getdate()

}