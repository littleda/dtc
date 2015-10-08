<?php
date_default_timezone_set("Asia/Bangkok");
class ReportController extends Controller {
    function actiontopdiseaseOPD() {

        $this->render('topdiseaseOPDView'
         //       , array( 'model' => $model )
        );
    }
    function actiontopdiseaseIPD() {

        $this->render('topdiseaseIPDView'
         //       , array( 'model' => $model )
        );
    }
   function actiontopdiseasefirstIPD() {

        $this->render('topdiseasefirstIPDView'
         //       , array( 'model' => $model )
        );
    }
    function actiontopdeadIPD() {

        $this->render('topdeadIPDView'
         //       , array( 'model' => $model )
        );
    }
    function actiontopdisease() {
        $this->render('topdiseaseView'
         //       , array( 'model' => $model )
        );
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

