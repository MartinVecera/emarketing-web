<?php 

Class Covid
{

public $url = "https://api.apify.com/v2/key-value-stores/qAEsnylzdjhCCyZeS/records/LATEST?disableRedirect=true";

    public function celkem()
    {

        $data = file_get_contents($this->url); 
        $dekod_dat = json_decode($data); 

        $infikovani = 0;

        foreach ($dekod_dat->data as $cas) {
            foreach ($cas as $kazdy_den) {
                $infikovani++;
            }

        }

        return $infikovani;
    }

    public function pohlavi()
    {

        $data = file_get_contents($this->url); 
        $dekod_dat = json_decode($data); 

        $prepinac = false;

        $pohlavi = 0;

        foreach ($dekod_dat->data as $cas) {
            foreach ($cas as $kazdy_den) {

                if ($kazdy_den[1] == "muž" && $prepinac == true) {
                    $pohlavi++; 

                } elseif ($kazdy_den[1] == "žena" && $prepinac == false) {
                    $pohlavi++;

                }

            }

        }

        if($prepinac == true) {
            return $pohlavi . " mužu";
        } elseif ($prepinac == false) {
            return $pohlavi . " žen";
        }

    }

    public function vek()
    {

        $data = file_get_contents($this->url); 
        $dekod_dat = json_decode($data); 
        
        $vek = array();

        foreach ($dekod_dat->data as $cas) {
            foreach ($cas as $kazdy_den) {
                $vek[] .= $kazdy_den[0] . ", ";
            }
        }
        
        return round(array_sum($vek) / count($vek));

    }

}

?>