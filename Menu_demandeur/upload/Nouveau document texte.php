
    
try {​​​​​
SimpleDateFormat formater = new SimpleDateFormat(dateFormat);
Date date = formater.parse(gregorianDate);
Calendar calendar = Calendar.getInstance();
calendar.setTime(date);
int year = calendar.get(Calendar.YEAR);
String syear = String.format("%04d", year).substring(2);
int century = Integer.parseInt(String.valueOf(((year / 100) + 1))
.substring(1));
int julian = Integer.parseInt(String.format("%d%s%03d", century,
syear, calendar.get(Calendar.DAY_OF_YEAR)));
return String.valueOf(julian);
}​​​​​ catch (Exception e) {​​​​​
return "";
