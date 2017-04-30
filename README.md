# cashback
A CLI PHP Application that will calculate cashback  amounts. The application signature should look like the following:
``
$ php shopback-calculator.php <action> <arg1> [<arg2>...]
$ node shopback-calculator.js <action> <arg1> [<arg2>...]
``

The application must be able to accept these actions as param and perform the corresponding tasks:

1. signup<domain>

Award corresponding bonus amount with currency for each of:
www.shopback.sg => SGD 5
www.shopback.my => MYR 10
www.shopback.co.id => IDR 25.000
www.shopback.com.tw => TWD 1000
www.myshopback.co.th => THB 500
www.myshopback.com => USD 5

2. spend <amount>[<amount>...]

Return cashback awarded rounded to 2 decimal places. Either:
award 20% of the highest amount if every single amount is >= 50;
award 15% of the highest amount if every single amount are >= 20;
award 10% of the highest if all amounts are >= 10;
or award 5% of the highest as cashback

3. redeem <domain>

Direct user to visit corresponding websites
www.shopback.sg => https://www.shopback.sg
www.shopback.my => https://www.shopback.my
www.shopback.co.id => https://www.shopback.co.id
www.shopback.com.tw => https://www.shopback.com.tw
www.myshopback.co.th => https://www.myshopback.co.th
www.shopback.com => https://www.shopback.com

The application needs to have an extensible interface where adding a new action is just a matter of adding
more files and should not require any modifications to the existing code base.
