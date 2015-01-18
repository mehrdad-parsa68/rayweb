// JavaScript Document
angular.module('priceCalculate', [])
  .controller('MainController', ['$scope','$http','$interval', function($scope,$http,$interval,$anchorScroll,$location) {
	
	
     $scope.todos = [
	 {'number':1,'name' : 'ماژول مدیریت کاربران','price' : 30000, done : false},
	 {'number':2,'name':'ماژول اخبار','price':100000,done : false},
	 {'number':3,'name':'ماژول پرسشهای متداول','price':100000,done : false},
	 {'number':4,'name':'ماژول مقالات','price':200000,done : false},
	 {'number':5,'name':'ماژول مدیریت فرم بر بستر پست الکتونیک (e-Form)','price':150000,done : false},
	 {'number':6,'name':'ماژول مدیریت فرم بر بستر بانک‌اطلاعاتی(db-Form)','price':200000,done : false},
	 {'number':7,'name':'ماژول نظرسنجی (E-Vote)','price':70000,done : false},
	 {'number':8,'name':'ماژول آلبوم تصاویر','price':200000,done : false},
	 {'number':9,'name':'ماژول مدیریت محصولات','price':300000,done : false},
	 {'number':10,'name':'ماژول ارسال پیام کوتاه (SMS)','price':200000,done : false},
	 {'number':11,'name':'ماژول منبع فایل (دانلود)','price':200000,done : false},
	 {'number':12,'name':'ماژول امتیاز دهی و اظهار نظر کاربران','price':150000,done : false},
	 {'number':13,'name':'ماژول درخواست همکاری ( استخدام) mail','price':250000,done : false},
	 {'number':14,'name':'ماژول درخواست همکاری ( استخدام) db','price':300000,done : false},
	 {'number':15,'name':'ماژول سفارش و پرداخت آنلاین','price':500000,done : false},
	 {'number':16,'name':'ماژول آمار بازدیدکنندگان','price':100000,done : false},
	 {'number':17,'name':'ماژول پرسش و پاسخ','price':300000,done : false},
	 {'number':18,'name':'موتور جستجوی داخلی','price':100000,done : false},
	 {'number':19,'name':'موتور جستجوی داخلی ajax','price':300000,done : false},
	 {'number':20,'name':'طراحی رابط گرافیکی + بستن صفحات (تک زبانه)','price':500000,done : false},
	 {'number':21,'name':'طراحی رابط گرافیکی + بستن صفحات (دو زبانه)','price':700000,done : false},
	 {'number':22,'name':'طراحی به صورت واکنش گرا','price':500000,done : false},
	 {'number':23,'name':'نقشه گوگل','price':100000,done : false},
	 {'number':24,'name':'نقشه سایت','price':100000,done : false},
	 {'number':25,'name':'بنر اسلاید شو تصاویر تا 4 عکس','price':200000,done : false},
	 {'number':26,'name':'تعیین سطوح دسترسی برای کاربران','price':500000,done : false},
	 {'number':27,'name':'اتصال به درگاه پرداخت بانک های داخلی ','price':200000,done : false},
	 {'number':28,'name':'اتصال به درگاه پرداخت بانک های خارجی ','price':400000,done : false},
	 {'number':29,'name':'سبدخرید','price':200000,done : false},
	 {'number':30,'name':'سیستم حفاظتی و امنیتی ویژه','price':200000,done : false},
	 {'number':31,'name':'بک آپ گیری ماهیانه','price':100000,done : false},
	 {'number':32,'name':'لینک شبکه های اجتماعی','price':0,done : false},
	 {'number':33,'name':'پشتیبانی از طریق تلفن','price':0,done : false},
	 {'number':34,'name':'پنل مدیریت ادمین','price':400000,done : false},
	 {'number':35,'name':'دامنه 1ساله (ir.)','price':6000,done : false},
	 {'number':36,'name':'دامنه 5 ساله (ir.)','price':15000,done : false},
	 {'number':37,'name':'دامنه 1 ساله (com.)','price':44000,done : false},
	 {'number':38,'name':'دامنه 5 ساله (com.)','price':220000,done : false},
	 {'number':39,'name':'ثبت در گوگل','price':100000,done : false},
	 {'number':40,'name':'کد امنیتی','price':0,done : false},
	 {'number':41,'name':'کد QR','price':0,done : false},
	 {'number':42,'name':'پیوندها','price':100000,done : false}
	 
	 ];
	 $scope.amount = 0;
	 
	 $scope.change = function(){
		 $scope.amount = 0;
		 angular.forEach($scope.todos, function(todo) {
			if(todo.done){
				$scope.amount += todo.price
				}
		  });
		 
		 }
	
  }
])