
Runner.buttonEvents["btn_kirim_ga"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='btn_kirim_ga';if(!pageObj.buttonEventBefore['btn_kirim_ga']){pageObj.buttonEventBefore['btn_kirim_ga']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["txt"]="Hello";ajax.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['btn_kirim_ga']){pageObj.buttonEventAfter['btn_kirim_ga']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var message=result["txt"]+" !!!";ajax.setMessage(message);}}
$('a[id="btn_kirim_ga"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="btn_kirim_ga"+"_"+Runner.genId();var button_btn_kirim_ga=new Runner.form.Button({id:this.id,btnName:"btn_kirim_ga"});button_btn_kirim_ga.init({args:[pageObj,proxy,pageid]});});};