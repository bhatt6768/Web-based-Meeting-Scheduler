var today = new Date().toISOString().split('T')[0];
document.getElementsByName("setTodaysDate")[0].setAttribute('min', today);
document.getElementsByName("setTodaysDate1")[1].setAttribute('min', today);;