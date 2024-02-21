<?php

namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use App\Models\DailyMarketData;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            "date" => "required|date",
            "gainers" => "required|file",
            "losers" => "required|file",
            "priceLists" => "required|file",
            "asi" => "required|numeric",
            "deal" => "required|numeric",
            "volume" => "required|numeric",
            "value" => "required|numeric",
            "marketCap" => "required|numeric",
        ]);
             

        [
            "gainers" => $gainers, "date"=> $date,
            "losers" => $losers, "priceLists" => $priceLists,
            "asi" => $asi, 
            "deal" => $deal, "volume" =>$volume,
            "value" => $value, "marketCap" => $marketCap,
            "bond_cap" =>$bondCap, "etf_cap"=> $etfCap

        ] = $request->all();
        $errors = [];
        if ($request->gainers) {
            $handleGainer = fopen($gainers, "r");
            $k = 0;
            while (($data = fgetcsv($handleGainer, 1000, ",")) !== false) {
                if ($k !== 0) {
                    [$board, $security, $refPrice, $openPrice, 
                    $highPrice, $lowPrice, $lastPrice, $closePrice, 
                    $changePrice, $changePercent, $securityName
                    ] = $data;
                    if (!$board) {
                        $errors[$k] = "cell $k  with board column of gainers upload file is empty";
                    }
                    if (!$security) {
                        $errors[$k] = "cell $k  with security column of gainers upload file is empty";
                    }
                    if (!$refPrice) {
                        $errors[$k] = "cell $k  with refPrice column of gainers upload file is empty";
                    }
                    if (!$openPrice) {
                        $errors[$k] = "cell $k  with openPrice column of gainers upload file is empty";
                    }
                    if (!$highPrice) {
                        $errors[$k] = "cell $k  with highPrice column of gainers upload file is empty";
                    }
                    if (!$lowPrice) {
                        $errors[$k] = "cell $k  with lowPrice column of gainers upload file is empty";
                    }
                    if (!$lastPrice) {
                        $errors[$k] = "cell $k  with lastPrice column of gainers upload file is empty";
                    }
                    if (!$closePrice) {
                        $errors[$k] = "cell $k  with closePrice column of gainers upload file is empty";
                    }
                    if (!$highPrice) {
                        $errors[$k] = "cell $k  with highPrice column of gainers upload file is empty";
                    }
                    if (!$changePrice) {
                        $errors[$k] = "cell $k  with changePrice column of gainers upload file is empty";
                    }
                    if (!$changePercent) {
                        $errors[$k] = "cell $k  with changePercent column of gainers upload file is empty";
                    }
                    if (!$securityName) {
                        $errors[$k] = "cell $k  with securityName column of gainers upload file is empty";
                    }
                    
                }
                ++$k;
            }
            fclose($handleGainer);
        }
        if ($request->losers) {
            $handleLoser = fopen($losers, "r");
            $k = 0;
            while (($data = fgetcsv($handleLoser, 1000, ",")) !== false) {
                if ($k !== 0) {
                    [$board, $security, $refPrice, $openPrice, 
                    $highPrice, $lowPrice, $lastPrice, $closePrice, 
                    $changePrice, $changePercent, $securityName
                    ] = $data;
                    if (!$board) {
                        $errors[$k] = "cell $k  with board column of gainers upload file is empty";
                    }
                    if (!$security) {
                        $errors[$k] = "cell $k  with security column of gainers upload file is empty";
                    }
                    if (!$refPrice) {
                        $errors[$k] = "cell $k  with refPrice column of gainers upload file is empty";
                    }
                    if (!$openPrice) {
                        $errors[$k] = "cell $k  with openPrice column of gainers upload file is empty";
                    }
                    if (!$highPrice) {
                        $errors[$k] = "cell $k  with highPrice column of gainers upload file is empty";
                    }
                    if (!$lowPrice) {
                        $errors[$k] = "cell $k  with lowPrice column of gainers upload file is empty";
                    }
                    if (!$lastPrice) {
                        $errors[$k] = "cell $k  with lastPrice column of gainers upload file is empty";
                    }
                    if (!$closePrice) {
                        $errors[$k] = "cell $k  with closePrice column of gainers upload file is empty";
                    }
                    if (!$highPrice) {
                        $errors[$k] = "cell $k  with highPrice column of gainers upload file is empty";
                    }
                    if (!$changePrice) {
                        $errors[$k] = "cell $k  with changePrice column of gainers upload file is empty";
                    }
                    if (!$changePercent) {
                        $errors[$k] = "cell $k  with changePercent column of gainers upload file is empty";
                    }
                    if (!$securityName) {
                        $errors[$k] = "cell $k  with securityName column of gainers upload file is empty";
                    }
                    
                }
                ++$k;
            }
            fclose($handleLoser);
        }
        if ($request->priceLists) {
            $handlePriceList = fopen($priceLists, 'r');
            $k = 0;
            while (($data = fgetcsv($handlePriceList, 1000, ",")) !== false) {
                // var_dump($data);
                // exit();
                
                if ($k !== 0) {
                    [
                        $board, $company, $refPrice, $pClose, 
                        $openPrice, $highPrice, $lowPrice, $closePrice, 
                        // $change, $trades, $marketVol, $marketVal, 
                        // $dailyVol, $dailyVal, $companyName, $tradeDate
                    ] = $data;
                    
                    if (!$board) {
                        $errors[$k] = "cell $k  with board column of loser upload file is empty";
                    }
                    if (!$company) {
                        $errors[$k] = "cell $k  with company column of loser upload file is empty";
                    }
                    if (!$refPrice) {
                        $errors[$k] = "cell $k  with refPrice column of loser upload file is empty";
                    }
                    if (!$refPrice) {
                        $errors[$k] = "cell $k  with refPrice column of loser upload file is empty";
                    }
                    if (!$pClose) {
                        $errors[$k] = "cell $k  with pClose column of loser upload file is empty";
                    }
                    if (!$openPrice) {
                        $errors[$k] = "cell $k  with  openPrice column of loser upload file is empty";
                    }
                    if (!$highPrice) {
                        $errors[$k] = "cell $k  with  highPrice column of loser upload file is empty";
                    }
                    if (!$lowPrice) {
                        $errors[$k] = "cell $k  with  lowPrice column of loser upload file is empty";
                    }
                    
                    if (!$closePrice) {
                        $errors[$k] = "cell $k  with  closePrice column of loser upload file is empty";
                    }
                    // if (!$change) {
                    //     $errors[$k] = "cell $k  with  change column of loser upload file is empty";
                    // }
                    // if (!$trades) {
                    //     $errors[$k] = "cell $k  with  trades column of loser upload file is empty";
                    // }
                    // if (!$marketVol) {
                    //     $errors[$k] = "cell $k  with  marketVol column of loser upload file is empty";
                    // }
                    // if (!$marketVal) {
                    //     $errors[$k] = "cell $k  with  marketVal column of loser upload file is empty";
                    // }
                    // if (!$dailyVol) {
                    //     $errors[$k] = "cell $k  with  dailyVol column of loser upload file is empty";
                    // }
                    // if (!$dailyVal) {
                    //     $errors[$k] = "cell $k  with  dailyVal column of loser upload file is empty";
                    // }
                    // if (!$companyName) {
                    //     $errors[$k] = "cell $k  with  companyName column of loser upload file is empty";
                    // }
                    // if (!$tradeDate) {
                    //     $errors[$k] = "cell $k  with  tradeDate column of loser upload file is empty";
                    // }
                }
                ++$k;
            }
            fclose($handlePriceList);
        }
        
        if (!$errors && count($errors) > 0) {
            return back()->with('errors', $errors);
        }
        
       $time = now()->format('d-m-Y');
        $time = explode("-", $time);
        $time = implode("", $time);
        $gFileName = "g".$time;
        $gainerPath = $request->file('gainers')->storeAs(
            'public/uploads', $gFileName.'.csv'
        );
        $lFileName = "l".$time;
        $loserPath = $request->file('losers')->storeAs(
            'public/uploads', $lFileName.'.csv'
        );
        $pFileName = "p".$time;
        $priceListPath = $request->file('priceLists')->storeAs(
            'public/uploads', $pFileName.'.csv'
        );
        DailyMarketData::create([
            "date"=> $request->date,
            "gainer"=> $gFileName.'.csv',
            "loser"=> $lFileName.'.csv',
            "priceList"=> $pFileName.'.csv',
            "asi" => $asi,
            "deal"=> $deal, "volume"=> $volume, 
            "value" => $value, "market_cap"=> $marketCap,
            "bond_cap" =>$bondCap, "etf_cap"=> $etfCap
        ]);
        return back()->with('status', 'Data Uploaded Successfully');
    }
}
