/*! jQuery Validation Plugin - v1.19.1 - 6/15/2019
 * https://jqueryvalidation.org/
 * Copyright (c) 2019 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"هنن جاين جي ضرورت آهي",remote:"هنن جاين جي ضرورت آهي",email:"لکيل اي ميل غلط آهي",url:"لکيل ايڊريس غلط آهي",date:"لکيل تاريخ غلط آهي",dateISO:"جي معيار جي مطابق نه آهي (ISO) لکيل تاريخ",number:"لکيل انگ صحيح ناهي",digits:"رڳو انگ داخل ڪري سگهجي ٿو",creditcard:"لکيل ڪارڊ نمبر صحيح نه آهي",equalTo:"داخل ٿيل ڀيٽ صحيح نه آهي",extension:"لکيل غلط آهي",maxlength:a.validator.format("وڌ کان وڌ {0} جي داخلا ڪري سگهجي ٿي"),minlength:a.validator.format("گهٽ ۾ گهٽ {0} جي داخلا ڪرڻ ضروري آهي"),rangelength:a.validator.format("داخلا جو {0} ۽ {1}جي وچ ۾ هجڻ ضروري آهي"),range:a.validator.format("داخلا جو {0} ۽ {1}جي وچ ۾ هجڻ ضروري آهي"),max:a.validator.format("وڌ کان وڌ {0} جي داخلا ڪري سگهجي ٿي"),min:a.validator.format("گهٽ ۾ گهٽ {0} جي داخلا ڪرڻ ضروري آهي")}),a});