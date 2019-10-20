<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\English;
use App\Relation;
use App\Sinhala;

class APIController extends Controller {

    public function search($word) {
        $code = 200;
        $state = 'SUCCESS';

        $en = new English();
        $si = new Sinhala();
        $rel = new Relation();
        $count = 0;

        $en_r = $en::where('word','LIKE','%'.$word.'%')->get();
        $sir = $si::where('word','LIKE','%'.$word.'%')->get();

        if(count($en_r) == 0 && count($sir) == 0) {
            return \Response::json('No Records')->setStatusCode(404, 'No Records');
        }

        if(count($en_r) >= 1) {
            $gls = array();
            foreach ($en_r as $words) {
                $match = $rel::find($words['id']);
                $gls[$count]['id'] = $words['id'];
                $gls[$count]['sinhala'] = $match->sinhala->word;
                $gls[$count]['english'] = $match->english->word;
                $gls[$count]['desc'] = $match->sinhala->desc;
                $count++;
            }
        } elseif(count($sir) >= 1) {
            $gls = array();
            foreach ($sir as $words) {
                $match = $rel::find($words['id']);
                $gls[$count]['id'] = $words['id'];
                $gls[$count]['sinhala'] = $match->sinhala->word;
                $gls[$count]['english'] = $match->english->word;
                $gls[$count]['desc'] = $match->sinhala->desc;
                $count++;
            }
        } else {
            $state = 'No Records Found!';
            $code = 404;
        }

        $response = \Response::json($gls)->setStatusCode($code, $state);
        return $response;
    }

    public function getAll() {
        $en = new English();
        $si = new Sinhala();
        $rel = new Relation();

        $data = array();

        $rels = $rel->get();
        $count = 0;
        foreach ($rels as $r) {
            $match = $rel::find($r['id']);
            $data[$count]['id'] = $r->id;
            $data[$count]['sinhala'] = $match->sinhala->word;
            $data[$count]['english'] = $match->english->word;
            $count++;
        }
        return \Response::json($data)->setStatusCode(200, 'SUCCESS');
    }
}
