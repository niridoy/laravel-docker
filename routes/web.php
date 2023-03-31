<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/status', 'UserController@show');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/', function () {
    return redirect(route('login'));
});

//user router list
Route::prefix('dashboard')->group(function(){
    Route::name('user.')->group(function(){
        Route::get('/',[UserController::class,'index'])->name('dashboard');
        Route::get('/profile',[UserController::class, 'profile'])->name('profile');
        Route::post('/profile/update',[UserController::class, 'update'])->name('profile.update');
    });
});

Route::get('data-count', function(){
    $Query = "";

    for ($i=16; $i <= 31 ; $i++) {
        $Query .= "SELECT COUNT(0) FROM terminaldata WHERE TerminalDataTime BETWEEN '2022-10-" . $i . " 00:00:00' AND '2022-10-" . $i . " 23:59:59'; <br>" ;
    }

    return $Query;

});

Route::get('/db-del', function(){

    $Month = "10";
    $Limit = 5000;
    $Break = 30;
    $Query = "";
    for ($d=01; $d <= 10; $d++) {
        $Day = str_pad($d, 2, '0', STR_PAD_LEFT);

        $Data = "2022-" . $Month . "-" . $Day;

        $Query .= "SET @ProcessTimeBegin := NOW(); # " .  $Data  . "<br>";

        for ($i=0; $i <= 23; $i++) {
            $Hour = str_pad($i, 2, '0', STR_PAD_LEFT);
            $Query .= "#Start hour " . $Hour . " <br>";

            for ($m=0; $m <= 4; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=5; $m <= 9; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=10; $m <= 14; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=15; $m <= 19; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=20; $m <= 24; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=25; $m <= 29; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=30; $m <= 34; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=35; $m <= 39; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=40; $m <= 44; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=45; $m <= 49; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=50; $m <= 54; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= " DO SLEEP(" . $Break . "); <br>";
            for ($m=55; $m <= 59; $m++) {
                $Minute = str_pad($m, 2, '0', STR_PAD_LEFT);
                $Query .= "&nbsp; &nbsp; &nbsp;&nbsp; DELETE FROM terminaldata WHERE TerminalDataTime BETWEEN '" . $Data . " ". $Hour .":" . $Minute . ":00' AND '" . $Data . " ". $Hour .":" . $Minute . ":59' ;   <br> ";
            }

            $Query .= "#End hour " . $Hour . " <br> <br> ";
            $Query .= " DO SLEEP(" . $Break . "); <br> <br>";
        }

        $Query .= "# Status # " .  $Data  . " <br>
                        SELECT		TIMEDIFF(NOW(), @ProcessTimeBegin) AS ProcessDuration;";
    }

    return $Query;
});

Route::get('/db-arc', function(){

    $Query = "";

    //$Data = "2022-09-05";
    $Month = "02";
    $Limit = 5000;
    $Break = 30;
    $Query .= "SET @ProcessTimeBeginFinal := NOW(); # Start Process <br> <br>";
    $TerminalDataTableName = "back_terminaldata";
    $ArcTerminalDataTableName = "arc_terminaldata";

    for ($d=21; $d <= 28; $d++) {
        $Day = str_pad($d, 2, '0', STR_PAD_LEFT);

        $Data = "2023-" . $Month . "-" . $Day;

       $Query .= "SET @ProcessTimeBegin := NOW(); # " .  $Data  . "<br> <br>";

        for ($i=0; $i < 24; $i++) {
            $Hour = str_pad($i, 2, '0', STR_PAD_LEFT);
            // $Break = 30;
        //    $Query .= " DO SLEEP(" . $Break . "); <br> <br>";
            // $Query .= "SET @ProcessTimeBegin := NOW(); # Date: " .  $Data . ", Hour: " . $Hour  . "<br> <br>";

            $Query .=
                "
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":00:00' AND '". $Data ." " .  $Hour . ":04:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":05:00' AND '". $Data ." " .  $Hour . ":09:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":10:00' AND '". $Data ." " .  $Hour . ":14:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":15:00' AND '". $Data ." " .  $Hour . ":19:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":20:00' AND '". $Data ." " .  $Hour . ":24:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":25:00' AND '". $Data ." " .  $Hour . ":29:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":30:00' AND '". $Data ." " .  $Hour . ":34:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":35:00' AND '". $Data ." " .  $Hour . ":39:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":40:00' AND '". $Data ." " .  $Hour . ":44:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":45:00' AND '". $Data ." " .  $Hour . ":49:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":50:00' AND '". $Data ." " .  $Hour . ":54:59';  <br>
                    INSERT INTO  ". $ArcTerminalDataTableName ."  SELECT * FROM ". $TerminalDataTableName ." WHERE TerminalDataTime BETWEEN '". $Data ." " .  $Hour . ":55:00' AND '". $Data ." " .  $Hour . ":59:59';  <br>
                <br>
                ";
        }
        $Query .= "SELECT TIMEDIFF(NOW(), @ProcessTimeBegin) AS ProcessDuration;<br> <br>";
    }
    $Query .= "SELECT TIMEDIFF(NOW(), @ProcessTimeBeginFinal) AS ProcessDuration;  # End Process ";
    return $Query;
});
