# RatesApi

## Install
composer require bijondev/ratesapi


## To gate Current rate
```
        $getrate=new Ratesapi();
        $pram=array(
                'currency'=>array('USD', 'GBP', 'INR'),
                'base'=>'INR'
        );
        $result= $getrate->getLatestRate($pram);

        echo "<pre>";
        print_r($result);
```
## Gate rate By Date
```
        $getrate=new Ratesapi();
        $pram=array(
                'currency'=>array('USD', 'GBP', 'INR'),
                'base'=>'INR'
        );
        $result= $getrate->getRateByDate('2019-07-25', $pram);

        echo "<pre>";
        print_r($result);
```
This is using api https://ratesapi.io/documentation/
