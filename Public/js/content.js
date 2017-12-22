$(document).ready(function () {kaifach();})
function markVideo(vd,d,t,s){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
	var id='BT'+(new Date()).getTime();
	$.ajax({ url: "/"+sitePath+"inc/ajax.asp?id="+vd+"&action=videoscore", success: function(obj){
        var a=obj;
			try{
				a.replace(/\[(\d+),(\d+),(\d+)\]/i,function ($0,d,t,s){
					var x=parseInt(d)+parseInt(t),y=(Math.round(s / x * 10) / 10.0) || 0;
					document.getElementById('MARK_B1').value=x;
					document.getElementById('MARK_B2').value=y;
					document.getElementById('MARK_B3').value=s;
					if(s<=0){
						document.getElementById("filmStarScore").innerHTML = "0<i>.0</i>";
						document.getElementById("start").className = "starB s0";
					}else{
						var ky = y.toString();
						ky = ky.replace(".","<i>.");
						ky = ky + "</i>";
						document.getElementById("filmStarScore").innerHTML = ky;
						document.getElementById("start").className = "starB s" + parseInt(y, 10).toString();
						if(parseInt(y, 10)==0){ var ka = 0; }else{ var ka = parseInt(y, 10)-1; }
						document.getElementById("filmStarScoreTip").innerHTML = textStart[ka]+"("+x+"评)";
						if(document.getElementById("renums")){ document.getElementById("renums").innerHTML = x;	}
					}
				});
			}catch(ig){}
      }});
}
function startm(v){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
  document.getElementById("filmStarScoreTip").innerHTML = textStart[v-1];
  document.getElementById("start").className = "starB s" + v.toString();
  document.getElementById("filmStarScore").innerHTML = v + "<i>.0</i>"

}
function OnStar(mid,v,classid){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
	$.ajax({ url: "/e/enews/?enews=AddInfoPfen&classid="+classid+"&id="+mid+"&doajax=1&ajaxarea=showpf&fen="+v,dataType:'json', success: function(obj){
                if(obj.result=='ok') {
                    var kky = String(obj.infopfen);
                    var kx = obj.infopfennum;
			if(kky.indexOf(".")<0){
				kky = kky + ".0";
			}
			kky = kky.replace(".","<i>.");
			kky = kky + "</i>";
                        $('#filmStarScore').html(kky);
                        $('#start').removeClass();
                        $('#start').addClass('starB s'+obj.star);
                        $('#filmStarScoreTip').html('感谢您的参与！');
			alert("已有"+kx+"人参与评分");
                        $('#MARK_B1').val(kx);
                        $('#MARK_B2').val(obj.infopfen);
                        $('#MARK_B3').val(obj.star);
                        kaifach();
                } else {
                    alert('你已经评过分啦');
            }

	}});

}
function kaifach(){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
	var x = parseFloat(document.getElementById("MARK_B1").value);
	var y = parseFloat(document.getElementById("MARK_B2").value);
	var z = parseFloat(document.getElementById("MARK_B3").value);

	var ky = y.toString();
	if(ky.indexOf(".")<0){
		ky = ky + ".0";
	}
	ky = ky.replace(".","<i>.");
	ky = ky + "</i>";
	document.getElementById("filmStarScore").innerHTML = ky;
	document.getElementById("start").className = "starB s" + parseInt(y, 10).toString();
	if(parseInt(y, 10)>0){
		document.getElementById("filmStarScoreTip").innerHTML = textStart[parseInt(y, 10)-1]+"("+x+"评)";
	}else{
		if(z>0){
			document.getElementById("filmStarScoreTip").innerHTML = textStart[0]+"("+x+"评)";
		}else{
			document.getElementById("filmStarScoreTip").innerHTML = "";
		}
	}


}

function getSubstr(downurl){
    var resultStr = downurl
    if(downurl.indexOf("ed2k://|file|")==0){
        var tmpStr =  resultStr.split('|');
        if(tmpStr.length>3){
            if(tmpStr[2].length>0){
                resultStr = decodeURIComponent(tmpStr[2]);
            }
        }

        return resultStr;
    }else{
        return resultStr;
    }
}