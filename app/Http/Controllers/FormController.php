<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\English;
use App\Relation;
use App\Sinhala;
use Auth;


class FormController extends Controller {
    public function someMethod(Request $r) {
        if ($r->prev_e) {
            $engi = new English();
            $prev = $engi->where('word','=',$r->english)->first();

            $sint = new Sinhala();
            $sint->word = $r->sinhala;
            $sint->desc = $r->desc_s;
            $sint->save();
            $sint_id = $sint->id;

            $rel = new Relation();
            $rel->english_id = $prev->id;
            $rel->sinhala_id = $sint_id;
            $rel->save();
            FormController::posst($r);
            return redirect()->route('master');
        } elseif ($r->prev_s) {
            $sint = new Sinhala();
            $prev = $sint->where('word','=',$r->sinhala)->first();

            $engi = new English();
            $engi->word = $r->english;
            $engi->desc = $r->desc_e;
            $engi->by = Auth::user()->id;
            $engi->save();
            $engi_id = $engi->id;

            $rel = new Relation();
            $rel->english_id = $engi_id;
            $rel->sinhala_id = $prev->id;
            $rel->save();
            FormController::posst($r);
            return redirect()->route('master');
        } else {
            $engi = new English();
            $engi->word = $r->english;
            $engi->desc = $r->desc_e;
            $engi->by = Auth::user()->id;
            $engi->save();
            $engi_id = $engi->id;

            $sint = new Sinhala();
            $sint->word = $r->sinhala;
            $sint->desc = $r->desc_s;
            $sint->save();
            $sint_id = $sint->id;

            $rel = new Relation();
            $rel->english_id = $engi_id;
            $rel->sinhala_id = $sint_id;
            $rel->save();
            FormController::posst($r);
            return redirect()->route('master');
        }
    }

    public function tabalzie($engi_id) {
        $engi = new English();
        $rel = new Relation();
        $engi = $engi->where('id','=',$engi_id)->first();
        $rels = $rel->where('english_id','=',$engi_id)->first();
        $engi->sinhala = $rels->sinhala->word;
        return view('success')->with('data',$engi);
    }
    
    public function posst($r) {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://k9aqkpifhj.execute-api.ap-southeast-1.amazonaws.com/default/words",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>'{"word": "'.$r->english.'","sinhala": "'.$r->sinhala.'","desc_e": "'.$r->desc_e.'","desc_s": "'.$r->desc_s.'"}',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response . ' Adding data to AWS DyanamoDB NoSQL Database Success!';
        }
    }
}
