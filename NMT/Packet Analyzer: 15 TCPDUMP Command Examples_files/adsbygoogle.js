(function(){var l=this,aa=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b},ba=function(a){return"number"==typeof a},ca=function(a){var b=typeof a;return"object"==b&&null!=a||"function"==b},da=function(a,b,c){return a.call.apply(a.bind,arguments)},ea=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,
arguments)}},n=function(a,b,c){n=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?da:ea;return n.apply(null,arguments)},fa=function(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}},ga=Date.now||function(){return+new Date},r=function(a,b){function c(){}c.prototype=b.prototype;a.sa=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.Ta=function(a,c,f){for(var g=Array(arguments.length-
2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[c].apply(a,g)}};var ha=(new Date).getTime();var t=function(a){a=parseFloat(a);return isNaN(a)||1<a||0>a?0:a},ia=function(a,b){var c=parseInt(a,10);return isNaN(c)?b:c},ja=function(a,b){return/^true$/.test(a)?!0:/^false$/.test(a)?!1:b},ka=/^([\w-]+\.)*([\w-]{2,})(\:[0-9]+)?$/,la=function(a,b){if(!a)return b;var c=a.match(ka);return c?c[0]:b};var ma=ia("101",-1),na=ia("0",0),oa=t("0.1"),pa=t("0.001"),qa=t("0.001"),ra=t("0.10"),sa=t("0.0"),ta=t(""),ua=t("0.1");var va=function(){return"r20160511"},wa=ja("false",!1),xa=ja("false",!1),ya=ja("false",!1),za=ya||!xa;var Aa=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},Ba=/&/g,Ca=/</g,Da=/>/g,Ea=/"/g,Fa=/'/g,Ga=/\x00/g,Ha={"\x00":"\\0","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\x0B",'"':'\\"',"\\":"\\\\","<":"<"},Ia={"'":"\\'"},Ja=function(a,b){return a<b?-1:a>b?1:0};var Ka=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e="string"==typeof a?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},La=Array.prototype.map?function(a,b,c){return Array.prototype.map.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=Array(d),f="string"==typeof a?a.split(""):a,g=0;g<d;g++)g in f&&(e[g]=b.call(c,f[g],g,a));return e};var w;a:{var Ma=l.navigator;if(Ma){var Na=Ma.userAgent;if(Na){w=Na;break a}}w=""}var x=function(a){return-1!=w.indexOf(a)};var z=function(a){z[" "](a);return a};z[" "]=function(){};var Oa=function(a){try{var b;if(b=!!a&&null!=a.location.href)a:{try{z(a.foo);b=!0;break a}catch(c){}b=!1}return b}catch(c){return!1}},Pa=function(a,b){return b.getComputedStyle?b.getComputedStyle(a,null):a.currentStyle},Ra=function(a,b){if(!(1E-4>Math.random())){var c=Math.random();if(c<b)return c=Qa(window),a[Math.floor(c*a.length)]}return null},Qa=function(a){try{var b=new Uint32Array(1);a.crypto.getRandomValues(b);return b[0]/65536/65536}catch(c){return Math.random()}},Sa=function(a,b){for(var c in a)Object.prototype.hasOwnProperty.call(a,
c)&&b.call(void 0,a[c],c,a)},Ta=function(a){var b=a.length;if(0==b)return 0;for(var c=305419896,d=0;d<b;d++)c^=(c<<5)+(c>>2)+a.charCodeAt(d)&4294967295;return 0<c?c:4294967296+c},Ua=/^([0-9.]+)px$/,Va=/^(-?[0-9.]{1,30})$/,Wa=function(a){return Va.test(a)&&(a=Number(a),!isNaN(a))?a:null};var Xa=function(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)};var ab=function(a,b,c,d,e,f){try{if((d?a.pa:Math.random())<(e||a.ca)){var g=a.ma+"//"+a.da+a.ja+b+("&"+Ya(c,1)),g=g.substring(0,2E3);"undefined"===typeof f?$a(g):$a(g,f)}}catch(h){}},Ya=function(a,b){var c=[];Sa(a,function(a,e){var f=null;if(ca(a)&&2>b)f=Ya(a,b+1);else if(0===a||a)f=String(a);f&&c.push(e+"="+encodeURIComponent(f))});return c.join("&")},$a=function(a,b){l.google_image_requests||(l.google_image_requests=[]);var c=l.document.createElement("img");if(b){var d=function(a){b(a);a=d;c.removeEventListener?
c.removeEventListener("load",a,!1):c.detachEvent&&c.detachEvent("onload",a);a=d;c.removeEventListener?c.removeEventListener("error",a,!1):c.detachEvent&&c.detachEvent("onerror",a)};Xa(c,"load",d);Xa(c,"error",d)}c.src=a;l.google_image_requests.push(c)};var bb=function(a,b,c){this.la=a;this.fa=b;this.N=c;this.H=null;this.ea=this.w;this.wa=!1},cb=function(a,b,c){this.message=a;this.fileName=b||"";this.lineNumber=c||-1},eb=function(a,b,c,d,e,f){var g;try{g=c()}catch(p){var h=a.N;try{var k=db(p),h=(f||a.ea).call(a,b,k,void 0,d)}catch(m){a.w("pAR",m)}if(!h)throw p;}finally{if(e)try{e()}catch(p){}}return g},C=function(a,b,c){var d=A;return function(){for(var e=[],f=0;f<arguments.length;++f)e[f]=arguments[f];return eb(d,a,function(){return b.apply(void 0,
e)},void 0,c)}};bb.prototype.w=function(a,b,c,d,e){try{var f={};f.context=a;b instanceof cb||(b=db(b));f.msg=b.message.substring(0,512);b.fileName&&(f.file=b.fileName);0<b.lineNumber&&(f.line=b.lineNumber.toString());var g=l.document;f.url=g.URL.substring(0,512);f.ref=(g.referrer||"").substring(0,512);fb(this,f,d);ab(this.la,e||this.fa,f,this.wa,c)}catch(h){}return this.N};
var fb=function(a,b,c){if(a.H)try{a.H(b)}catch(d){}if(c)try{c(b)}catch(d){}},db=function(a){var b=a.toString();a.name&&-1==b.indexOf(a.name)&&(b+=": "+a.name);a.message&&-1==b.indexOf(a.message)&&(b+=": "+a.message);if(a.stack){var c=a.stack,d=b;try{-1==c.indexOf(d)&&(c=d+"\n"+c);for(var e;c!=e;)e=c,c=c.replace(/((https?:\/..*\/)[^\/:]*:\d+(?:.|\n)*)\2/,"$1");b=c.replace(/\n */g,"\n")}catch(f){b=d}}return new cb(b,a.fileName,a.lineNumber)};var gb=x("Opera"),D=x("Trident")||x("MSIE"),hb=x("Edge"),E=x("Gecko")&&!(-1!=w.toLowerCase().indexOf("webkit")&&!x("Edge"))&&!(x("Trident")||x("MSIE"))&&!x("Edge"),ib=-1!=w.toLowerCase().indexOf("webkit")&&!x("Edge"),jb=function(){var a=l.document;return a?a.documentMode:void 0},kb;
a:{var lb="",mb=function(){var a=w;if(E)return/rv\:([^\);]+)(\)|;)/.exec(a);if(hb)return/Edge\/([\d\.]+)/.exec(a);if(D)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(ib)return/WebKit\/(\S+)/.exec(a);if(gb)return/(?:Version)[ \/]?(\S+)/.exec(a)}();mb&&(lb=mb?mb[1]:"");if(D){var nb=jb();if(null!=nb&&nb>parseFloat(lb)){kb=String(nb);break a}}kb=lb}
var ob=kb,pb={},qb=function(a){if(!pb[a]){for(var b=0,c=Aa(String(ob)).split("."),d=Aa(String(a)).split("."),e=Math.max(c.length,d.length),f=0;0==b&&f<e;f++){var g=c[f]||"",h=d[f]||"",k=RegExp("(\\d*)(\\D*)","g"),p=RegExp("(\\d*)(\\D*)","g");do{var m=k.exec(g)||["","",""],B=p.exec(h)||["","",""];if(0==m[0].length&&0==B[0].length)break;b=Ja(0==m[1].length?0:parseInt(m[1],10),0==B[1].length?0:parseInt(B[1],10))||Ja(0==m[2].length,0==B[2].length)||Ja(m[2],B[2])}while(0==b)}pb[a]=0<=b}},rb=l.document,
sb=rb&&D?jb()||("CSS1Compat"==rb.compatMode?parseInt(ob,10):5):void 0;var tb;if(!(tb=!E&&!D)){var ub;if(ub=D)ub=9<=Number(sb);tb=ub}tb||E&&qb("1.9.1");D&&qb("9");var F=document,G=window;var vb=Object.prototype.hasOwnProperty,H=function(a,b){for(var c in a)vb.call(a,c)&&b.call(void 0,a[c],c,a)},I=function(a){return!(!a||!a.call)&&"function"===typeof a},wb=function(a,b){for(var c=1,d=arguments.length;c<d;++c)a.push(arguments[c])},J=function(a,b){if(a.indexOf){var c=a.indexOf(b);return 0<c||0===c}for(c=0;c<a.length;c++)if(a[c]===b)return!0;return!1},xb=function(a){a.google_unique_id?++a.google_unique_id:a.google_unique_id=1},yb=/(^| )adsbygoogle($| )/,zb={"http://googleads.g.doubleclick.net":!0,
"http://pagead2.googlesyndication.com":!0,"https://googleads.g.doubleclick.net":!0,"https://pagead2.googlesyndication.com":!0},Ab=/\.google\.com(:\d+)?$/,Bb=function(a){a=wa&&a.google_top_window||a.top;return Oa(a)?a:null};var Cb,A;Cb=new function(){this.ma="http:"===G.location.protocol?"http:":"https:";this.da="pagead2.googlesyndication.com";this.ja="/pagead/gen_204?id=";this.ca=.01;this.pa=Math.random()};A=new bb(Cb,"jserror",!0);var Eb=function(){var a=[Db];A.H=function(b){Ka(a,function(a){a(b)})}},Fb=function(a,b,c,d){eb(A,a,c,d,void 0,b)},Gb=A.w,Hb=function(a,b,c){ab(Cb,a,b,"jserror"!=a,c,void 0)};var Ib=function(a,b){this.start=a<b?a:b;this.end=a<b?b:a};Ib.prototype.clone=function(){return new Ib(this.start,this.end)};var Jb=function(a){var b;try{b=parseInt(a.localStorage.getItem("google_experiment_mod"),10)}catch(c){return null}if(0<=b&&1E3>b)return b;b=Math.floor(1E3*Qa(a));try{return a.localStorage.setItem("google_experiment_mod",""+b),b}catch(c){return null}};var Kb=null,Lb=function(){if(!Kb){for(var a=window,b=a,c=0;a&&a!=a.parent;)if(a=a.parent,c++,Oa(a))b=a;else break;Kb=b}return Kb};var Mb={l:"10573511",j:"10573512"},Nb={l:"10573695",j:"10573696"},K={Ca:{},Sa:{l:"453848100",j:"453848101"},Ka:{l:"24819308",j:"24819309",za:"24819320",Ea:"24819321"},Ja:{l:"24819330",j:"24819331"},Ga:{l:"86724438",j:"86724439"},Oa:{l:"10573505",j:"10573506"},$:{l:"10573595",j:"10573596"},R:{l:"10573581",j:"10573582"},Na:{l:"10573605",j:"10573606"},Da:{l:"26835105",j:"26835106"},Fa:{l:"35923720",j:"35923721"},O:{l:"35923760",j:"35923761"},P:{l:"20040000",j:"20040001"},Aa:{l:"20040016",j:"20040017"},
La:{l:"19188000",j:"19188001"},Ba:{ya:"314159230",Ia:"314159231"},Ha:{Pa:"27285692",Ra:"27285712",Qa:"27285713"},Ma:{l:"27415010",j:"27415011"}};var L=function(){};L.prototype.G=function(a){var b=[];Ob(this,a,b);return b.join("")};
var Ob=function(a,b,c){switch(typeof b){case "string":a.A(b,c);break;case "number":a.L(b,c);break;case "boolean":c.push(String(b));break;case "undefined":c.push("null");break;case "object":if(null==b){c.push("null");break}if(b instanceof Array||void 0!=b.length&&b.splice){var d=b.length;c.push("[");for(var e="",f=0;f<d;f++)c.push(e),Ob(a,b[f],c),e=",";c.push("]");break}a.M(b,c);break;case "function":break;default:throw Error("Unknown type: "+typeof b);}},Pb={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b",
"\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},Qb=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;L.prototype.A=function(a,b){b.push('"');b.push(a.replace(Qb,function(a){if(a in Pb)return Pb[a];var b=a.charCodeAt(0),e="\\u";16>b?e+="000":256>b?e+="00":4096>b&&(e+="0");return Pb[a]=e+b.toString(16)}));b.push('"')};L.prototype.L=function(a,b){b.push(isFinite(a)&&!isNaN(a)?String(a):"null")};
L.prototype.M=function(a,b){b.push("{");var c="",d;for(d in a)if(a.hasOwnProperty(d)){var e=a[d];"function"!=typeof e&&(b.push(c),this.A(d,b),b.push(":"),Ob(this,e,b),c=",")}b.push("}")};var Rb=x("Safari")&&!((x("Chrome")||x("CriOS"))&&!x("Edge")||x("Coast")||x("Opera")||x("Edge")||x("Silk")||x("Android"))&&!(x("iPhone")&&!x("iPod")&&!x("iPad")||x("iPad")||x("iPod"));var Sb=null,Tb=null,Ub=E||ib&&!Rb||gb||"function"==typeof l.btoa,Vb=function(a,b){if(!Sb){Sb={};Tb={};for(var c=0;65>c;c++)Sb[c]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(c),Tb[c]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_.".charAt(c)}for(var c=b?Tb:Sb,d=[],e=0;e<a.length;e+=3){var f=a[e],g=e+1<a.length,h=g?a[e+1]:0,k=e+2<a.length,p=k?a[e+2]:0,m=f>>2,f=(f&3)<<4|h>>4,h=(h&15)<<2|p>>6,p=p&63;k||(p=64,g||(h=64));d.push(c[m],c[f],c[h],c[p])}return d.join("")},
Wb=function(a){if(Ub)a=l.btoa(a);else{for(var b=[],c=0,d=0;d<a.length;d++){for(var e=a.charCodeAt(d);255<e;)b[c++]=e&255,e>>=8;b[c++]=e}a=Vb(b,void 0)}return a};var Xb={google_ad_modifications:!0,google_analytics_domain_name:!0,google_analytics_uacct:!0},Yb=function(a){try{if(window.JSON&&window.JSON.stringify&&window.encodeURIComponent){var b,c,d=function(){return this};null!=Object.prototype.toJSON&&(b=Object.prototype.toJSON,Object.prototype.toJSON=d);null!=Array.prototype.toJSON&&(c=Array.prototype.toJSON,Array.prototype.toJSON=d);var e=Wb(encodeURIComponent(window.JSON.stringify(a)));b&&(Object.prototype.toJSON=b);c&&(Array.prototype.toJSON=c);return e}Hb("sblob",
{json:window.JSON?1:0,eURI:window.encodeURIComponent?1:0})}catch(f){A.w("sblob",f,void 0,void 0)}return""},Zb=function(a){a.google_page_url&&(a.google_page_url=String(a.google_page_url));var b=[];H(a,function(a,d){if(null!=a){var e;try{e=(new L).G(a)}catch(f){}e&&(e=e.replace(/\//g,"\\$&"),wb(b,d,"=",e,";"))}});return b.join("")};var $b=function(a,b,c){Fb("files::getSrc",Gb,function(){if("https:"==G.location.protocol&&"http"==c)throw c="https",Error("Requested url "+a+b);});return[c,"://",a,b].join("")},ac=function(a,b,c){c||(c=za?"https":"http");return $b(a,b,c)};var bc=function(a){return(a=a.google_ad_modifications)?a.eids||[]:[]},M=function(a){return(a=a.google_ad_modifications)?a.loeids||[]:[]},cc=function(a,b,c){if(!a)return null;for(var d=0;d<a.length;++d)if((a[d].ad_slot||b)==b&&(a[d].ad_tag_origin||c)==c)return a[d];return null};var dc=function(a){return eval("("+a+")")},N=function(a){this.F=a};N.prototype.G=function(a){var b=[];ec(this,a,b);return b.join("")};
var ec=function(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if("array"==aa(b)){var d=b.length;c.push("[");for(var e="",f=0;f<d;f++)c.push(e),e=b[f],ec(a,a.F?a.F.call(b,String(f),e):e,c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{a.M(b,c);return}}switch(typeof b){case "string":a.A(b,c);break;case "number":a.L(b,c);break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+
typeof b);}}},fc={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},gc=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;N.prototype.A=function(a,b){b.push('"',a.replace(gc,function(a){var b=fc[a];b||(b="\\u"+(a.charCodeAt(0)|65536).toString(16).substr(1),fc[a]=b);return b}),'"')};N.prototype.L=function(a,b){b.push(isFinite(a)&&!isNaN(a)?String(a):"null")};
N.prototype.M=function(a,b){b.push("{");var c="",d;for(d in a)if(Object.prototype.hasOwnProperty.call(a,d)){var e=a[d];"function"!=typeof e&&(b.push(c),this.A(d,b),b.push(":"),ec(this,this.F?this.F.call(a,d,e):e,b),c=",")}b.push("}")};var P=function(){},hc=function(a,b,c){a.m=null;b||(b=[]);a.Xa=void 0;a.I=-1;a.o=b;a:{if(a.o.length){b=a.o.length-1;var d=a.o[b];if(d&&"object"==typeof d&&"array"!=aa(d)){a.K=b-a.I;a.s=d;break a}}a.K=Number.MAX_VALUE}a.Ua={};if(c)for(b=0;b<c.length;b++)d=c[b],d<a.K?(d+=a.I,a.o[d]=a.o[d]||Q):a.s[d]=a.s[d]||Q},Q=[],R=function(a,b){if(b<a.K){var c=b+a.I,d=a.o[c];return d===Q?a.o[c]=[]:d}d=a.s[b];return d===Q?a.s[b]=[]:d},ic=function(a,b){a.m||(a.m={});if(!a.m[2]){for(var c=R(a,2),d=[],e=0;e<c.length;e++)d[e]=
new b(c[e]);a.m[2]=d}c=a.m[2];c==Q&&(c=a.m[2]=[]);return c},jc=l.JSON&&l.JSON.stringify||"object"===typeof JSON&&JSON.stringify;P.prototype.G="function"==typeof Uint8Array?function(){var a=Uint8Array.prototype.toJSON;Uint8Array.prototype.toJSON=function(){return Vb(this)};try{var b=jc.call(null,this.o,kc)}finally{Uint8Array.prototype.toJSON=a}return b}:jc?function(){return jc.call(null,this.o,kc)}:function(){return(new N(kc)).G(this.o)};
var kc=function(a,b){if(ba(b)){if(isNaN(b))return"NaN";if(Infinity===b)return"Infinity";if(-Infinity===b)return"-Infinity"}return b};P.prototype.toString=function(){return this.o.toString()};P.prototype.getExtension=function(a){if(this.s){this.m||(this.m={});var b=a.Va;if(a.Wa){if(a.ia())return this.m[b]||(this.m[b]=La(this.s[b]||[],function(b){return new a.aa(b)})),this.m[b]}else if(a.ia())return!this.m[b]&&this.s[b]&&(this.m[b]=new a.aa(this.s[b])),this.m[b];return this.s[b]}};var mc=function(a){hc(this,a,lc)};r(mc,P);var lc=[2,3],nc=function(a){hc(this,a,null)};r(nc,P);var pc=function(a){hc(this,a,oc)};r(pc,P);var oc=[1,2],qc=function(a){hc(this,a,null)};r(qc,P);var rc={};rc[1]=sc;var sc=[1,2,3];var tc=function(a,b){var c=R(a,1);if(null==c)return!1;c=rc[c];if(null==c||!c.length)return!1;for(var c=ic(a,nc),d=0;d<c.length;d++){var e=c[d],f=R(e,1),e=R(e,2);if(ba(f)&&ba(e)&&f<=b&&b<=e)return!0}return!1};var uc={overlays:1,interstitials:2,vignettes:2,inserts:3,immersives:4};var S=function(a){a=a.document;return("CSS1Compat"==a.compatMode?a.documentElement:a.body)||{}};var vc=function(){this.wasReactiveAdConfigReceived={};this.wasReactiveAdCreated={};this.wasReactiveAdVisible={};this.stateForType={};this.reactiveTypeEnabledByReactiveTag={};this.isReactiveTagFirstOnPage=this.wasReactiveAdConfigHandlerRegistered=this.wasReactiveTagRequestSent=!1;this.reactiveTypeDisabledByPublisher={};this.debugCard=null;this.debugCardRequested=!1;this.interstitialJSRefactorExperiment=0;this.messageValidationEnabled=this.vignetteNmoScaledExperimentAndEligible=this.vignetteNmoScaledExperiment=
this.floatingNmoOrientationExperimentAndEligible=this.floatingNmoOrientationExperiment=this.floatingNmoScaledExperimentAndEligible=this.floatingNmoScaledExperiment=!1};var wc=function(a){a.google_reactive_ads_global_state||(a.google_reactive_ads_global_state=new vc);a=a.google_reactive_ads_global_state;return!!a&&a.vignetteNmoScaledExperimentAndEligible};var xc=new function(){this.na=new Ib(100,199)};var yc=function(a,b,c){return G.location&&G.location.hash=="#google_plle_"+c?c:Ra([b,c],a)},zc=function(a,b,c,d){a=a.google_active_plles=a.google_active_plles||[];J(M(b),c)||J(bc(b),c)?a.push(c):(J(M(b),d)||J(bc(b),d))&&a.push(d)};var Ac=function(a){this.v=a;a.google_iframe_oncopy||(a.google_iframe_oncopy={handlers:{},upd:n(this.va,this)});this.ra=a.google_iframe_oncopy},Bc;var T="var i=this.id,s=window.google_iframe_oncopy,H=s&&s.handlers,h=H&&H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&&d&&(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}";
/[\x00&<>"']/.test(T)&&(-1!=T.indexOf("&")&&(T=T.replace(Ba,"&amp;")),-1!=T.indexOf("<")&&(T=T.replace(Ca,"&lt;")),-1!=T.indexOf(">")&&(T=T.replace(Da,"&gt;")),-1!=T.indexOf('"')&&(T=T.replace(Ea,"&quot;")),-1!=T.indexOf("'")&&(T=T.replace(Fa,"&#39;")),-1!=T.indexOf("\x00")&&(T=T.replace(Ga,"&#0;")));Bc=T;Ac.prototype.set=function(a,b){this.ra.handlers[a]=b;this.v.addEventListener&&this.v.addEventListener("load",n(this.ga,this,a),!1)};
Ac.prototype.ga=function(a){a=this.v.document.getElementById(a);try{var b=a.contentWindow.document;if(a.onload&&b&&(!b.body||!b.body.firstChild))a.onload()}catch(c){}};Ac.prototype.va=function(a,b){var c=Cc("rx",a),d;a:{if(a&&(d=a.match("dt=([^&]+)"))&&2==d.length){d=d[1];break a}d=""}d=(new Date).getTime()-d;c=c.replace(/&dtd=(\d+|-?M)/,"&dtd="+(1E5<=d?"M":0<=d?d:"-M"));this.set(b,c);return c};
var Cc=function(a,b){var c=new RegExp("\\b"+a+"=(\\d+)"),d=c.exec(b);d&&(b=b.replace(c,a+"="+(+d[1]+1||1)));return b};E||ib||D&&qb(11);var Dc=!1,Ec=function(a,b,c){var d=["<iframe"],e;for(e in a)a.hasOwnProperty(e)&&wb(d,e+"="+a[e]);e="left:0;position:absolute;top:0;";Dc&&(e=e+"width:"+b+"px;height:"+c+"px;");d.push('style="'+e+'"');d.push("></iframe>");a=a.id;b="border:none;height:"+c+"px;margin:0;padding:0;position:relative;visibility:visible;width:"+b+"px;background-color:transparent";return['<ins id="',a+"_expand",'" style="display:inline-table;',b,'"><ins id="',a+"_anchor",'" style="display:block;',b,'">',d.join(" "),"</ins></ins>"].join("")};var Fc=function(a){if(!a)return"";(a=a.toLowerCase())&&"ca-"!=a.substring(0,3)&&(a="ca-"+a);return a};var Gc=null;var Hc={"120x90":!0,"160x90":!0,"180x90":!0,"200x90":!0,"468x15":!0,"728x15":!0};var Ic,U=function(a){this.D=[];this.v=a||window;this.u=0;this.C=null;this.Z=0},Jc=function(a,b){this.ha=a;this.xa=b};U.prototype.enqueue=function(a,b){0!=this.u||0!=this.D.length||b&&b!=window?this.T(a,b):(this.u=2,this.X(new Jc(a,window)))};U.prototype.T=function(a,b){this.D.push(new Jc(a,b||this.v));Kc(this)};U.prototype.ka=function(a){this.u=1;if(a){var b=n(this.W,this,!0);this.C=this.v.setTimeout(C("sjr::timeout",b,void 0),a)}};
U.prototype.W=function(a){a&&++this.Z;1==this.u&&(null!=this.C&&(this.v.clearTimeout(this.C),this.C=null),this.u=0);Kc(this)};U.prototype.qa=function(){return!(!window||!Array)};U.prototype.ta=function(){return this.Z};U.prototype.nq=U.prototype.enqueue;U.prototype.nqa=U.prototype.T;U.prototype.al=U.prototype.ka;U.prototype.rl=U.prototype.W;U.prototype.sz=U.prototype.qa;U.prototype.tc=U.prototype.ta;var Kc=function(a){var b=n(a.ua,a);a.v.setTimeout(C("sjr::tryrun",b,void 0),0)};
U.prototype.ua=function(){if(0==this.u&&this.D.length){var a=this.D.shift();this.u=2;var b=n(this.X,this,a);a.xa.setTimeout(C("sjr::run",b,void 0),0);Kc(this)}};U.prototype.X=function(a){this.u=0;a.ha()};
var Lc=function(a){try{return a.sz()}catch(b){return!1}},Mc=function(a){return!!a&&("object"===typeof a||"function"===typeof a)&&Lc(a)&&I(a.nq)&&I(a.nqa)&&I(a.al)&&I(a.rl)},Nc=function(){if(Ic&&Lc(Ic))return Ic;var a=Lb(),b=a.google_jobrunner;return Mc(b)?Ic=b:a.google_jobrunner=Ic=new U(a)},Oc=function(a,b){Nc().nq(a,b)},Pc=function(a,b){Nc().nqa(a,b)};var V=function(a){this.name="TagError";this.message=a||"";Error.captureStackTrace?Error.captureStackTrace(this,V):this.stack=Error().stack||""};r(V,Error);
var Qc=function(){var a=ya?"https":"http",b=z("script"),c;a:{if(wa)try{var d=G.google_cafe_host||G.top.google_cafe_host;if(d){c=d;break a}}catch(e){}c=la("","pagead2.googlesyndication.com")}return["<",b,' src="',ac(c,["/pagead/js/",va(),"/r20160513/show_ads_impl.js"].join(""),a),'"></',b,">"].join("")},Rc=function(a,b,c,d){return function(){var e=
!1;d&&Nc().al(3E4);try{var f=a.document.getElementById(b).contentWindow;if(Oa(f)){var g=a.document.getElementById(b).contentWindow,h=g.document;h.body&&h.body.firstChild||(/Firefox/.test(navigator.userAgent)?h.open("text/html","replace"):h.open(),g.google_async_iframe_close=!0,h.write(c))}else{for(var k=a.document.getElementById(b).contentWindow,f=c,f=String(f),g=['"'],h=0;h<f.length;h++){var p=f.charAt(h),m=p.charCodeAt(0),B=h+1,O;if(!(O=Ha[p])){var y;if(31<m&&127>m)y=p;else{var u=p;if(u in Ia)y=
Ia[u];else if(u in Ha)y=Ia[u]=Ha[u];else{var q=u,v=u.charCodeAt(0);if(31<v&&127>v)q=u;else{if(256>v){if(q="\\x",16>v||256<v)q+="0"}else q="\\u",4096>v&&(q+="0");q+=v.toString(16).toUpperCase()}y=Ia[u]=q}}O=y}g[B]=O}g.push('"');k.location.replace("javascript:"+g.join(""))}e=!0}catch(Za){k=Lb().google_jobrunner,Mc(k)&&k.rl()}e&&(e=Cc("google_async_rrc",c),(new Ac(a)).set(b,Rc(a,b,e,!1)))}},Sc=function(a){var b=["<iframe"];H(a,function(a,d){null!=a&&b.push(" "+d+'="'+a+'"')});b.push("></iframe>");return b.join("")},
Uc=function(a,b,c){Tc(a,b,c,function(a,b,f){for(var g=a.document,h=b.id,k=0;!h||g.getElementById(h);)h="aswift_"+k++;b.id=h;b.name=h;var h=Number(f.google_ad_width),k=Number(f.google_ad_height),p=K.O;zc(f,a,p.l,p.j);Dc=J(M(a),p.j);16==f.google_reactive_ad_format?(a=g.createElement("div"),f=Ec(b,h,k),a.innerHTML=f,c.appendChild(a.firstChild)):(a=Ec(b,h,k),c.innerHTML=a);return b.id})},Tc=function(a,b,c,d){var e=z("script"),f={},g=b.google_ad_height;f.width='"'+b.google_ad_width+'"';f.height='"'+g+
'"';f.frameborder='"0"';f.marginwidth='"0"';f.marginheight='"0"';f.vspace='"0"';f.hspace='"0"';f.allowtransparency='"true"';f.scrolling='"no"';f.allowfullscreen='"true"';f.onload='"'+Bc+'"';d=d(a,f,b);g=b.google_ad_output;(f=b.google_ad_format)||"html"!=g&&null!=g||(f=b.google_ad_width+"x"+b.google_ad_height);g=!b.google_ad_slot||b.google_override_format||!Hc[b.google_ad_width+"x"+b.google_ad_height]&&"aa"==b.google_loader_used;f=f&&g?f.toLowerCase():"";b.google_ad_format=f;for(var f=[b.google_ad_slot,
b.google_ad_format,b.google_ad_type,b.google_ad_width,b.google_ad_height],g=[],h=0,k=c;k&&25>h;k=k.parentNode,++h)g.push(9!==k.nodeType&&k.id||"");(g=g.join())&&f.push(g);b.google_ad_unit_key=Ta(f.join(":")).toString();f=a.google_adk2_experiment=a.google_adk2_experiment||Ra(["C","E"],qa)||"N";if("E"==f){f=[];for(g=0;c&&25>g;++g){h="";h=(h=9!==c.nodeType&&c.id)?"/"+h:"";a:{if(c&&c.nodeName&&c.parentElement)for(var k=c.nodeName.toString().toLowerCase(),p=c.parentElement.childNodes,m=0,B=0;B<p.length;++B){var O=
p[B];if(O.nodeName&&O.nodeName.toString().toLowerCase()===k){if(c===O){k="."+m;break a}++m}}k=""}f.push((c.nodeName&&c.nodeName.toString().toLowerCase())+h+k);c=c.parentElement}c=f.join()+":";f=a;g=[];if(f)try{for(var y=f.parent,h=0;y&&y!==f&&25>h;++h){for(var u=y.frames,k=0;k<u.length;++k)if(f===u[k]){g.push(k);break}f=y;y=f.parent}}catch(Za){}b.google_ad_dom_fingerprint=Ta(c+g.join()).toString()}else"C"==f&&(b.google_ad_dom_fingerprint="ctrl");y=Zb(b);u=null;c=Ra(["C","E"],ra);"E"==c?(u=Yb(b))||
(u="{X}"):"C"==c&&(u="{C}");var q;b=b.google_ad_client;if(!Gc)b:{g=[l.top];f=[];for(h=0;k=g[h++];){f.push(k);try{if(k.frames)for(var v=k.frames.length,p=0;p<v&&1024>g.length;++p)g.push(k.frames[p])}catch(Za){}}for(v=0;v<f.length;v++)try{if(q=f[v].frames.google_esf){Gc=q;break b}}catch(Za){}Gc=null}Gc?q="":(q={style:"display:none"},/[^a-z0-9-]/.test(b)?q="":(q["data-ad-client"]=Fc(b),q.id="google_esf",q.name="google_esf",q.src=ac(la("","googleads.g.doubleclick.net"),["/pagead/html/",
va(),"/r20160513/zrt_lookup.html"].join("")),q=Sc(q)));v=ha;b=(new Date).getTime();if(f=a.google_async_for_oa_experiment)a.google_async_for_oa_experiment=void 0;g=a.google_unique_id;q=["<!doctype html><html><body>",q,"<",e,">",y,"google_show_ads_impl=true;google_unique_id=","number"===typeof g?g:0,';google_async_iframe_id="',d,'";google_start_time=',v,";",c?'google_pub_vars = "'+u+'";':"",f?'google_async_for_oa_experiment="'+f+'";':"",
"google_bpp=",b>v?b-v:1,";google_async_rrc=0;google_iframe_start_time=new Date().getTime();</",e,">",Qc(),"</body></html>"].join("");(a.document.getElementById(d)?Oc:Pc)(Rc(a,d,q,!0))},Vc=function(a,b){var c=navigator;if(a&&b&&c){var c=a.document,d=Fc(b);if(!/[^a-z0-9-]/.test(d)){var e=Aa("r20160212");e&&(e+="/");e=ac("pagead2.googlesyndication.com","/pub-config/"+e+d+".js");d=c.createElement("script");d.src=e;(c=c.getElementsByTagName("script")[0])&&c.parentNode&&c.parentNode.insertBefore(d,
c)}}};var W=function(a,b){this.V=a;this.U=b};W.prototype.minWidth=function(){return this.V};W.prototype.height=function(){return this.U};W.prototype.B=function(a){return 300<a&&300<this.U?this.V:1200<a?1200:Math.round(a)};W.prototype.J=function(a){return this.B(a)+"x"+this.height()};var Wc={rectangle:1,horizontal:2,vertical:4},X=function(a,b,c){W.call(this,a,b);this.oa=c};r(X,W);var Xc=function(a){return function(b){return!!(b.oa&a)}},Yc=[new X(970,90,2),new X(728,90,2),new X(468,60,2),new X(336,280,1),new X(320,100,2),new X(320,50,2),new X(300,600,4),new X(300,250,1),new X(250,250,1),new X(234,60,2),new X(200,200,1),new X(180,150,1),new X(160,600,4),new X(125,125,1),new X(120,600,4),new X(120,240,4)];var Zc=function(a,b){for(var c=["width","height"],d=0;d<c.length;d++){var e="google_ad_"+c[d];if(!b.hasOwnProperty(e)){var f;f=(f=Ua.exec(a[c[d]]))?+f[1]:null;f=null===f?null:Math.round(f);null!=f&&(b[e]=f)}}};var $c=function(a){return function(b){return b.minWidth()<=a}},bd=function(a,b,c){var d=a&&ad(c,b);return function(a){return!(d&&250<=a.height())}},ad=function(a,b){var c;try{var d=b.document.documentElement.getBoundingClientRect(),e=a.getBoundingClientRect();c={x:e.left-d.left,y:e.top-d.top}}catch(f){c=null}return(c?c.y:0)<S(b).clientHeight-100};var cd=function(a){return function(b){for(var c=a.length-1;0<=c;--c)if(!a[c](b))return!1;return!0}},dd=function(a,b){for(var c=a.length,d=0;d<c;++d){var e=a[d];if(b(e))return e}return null};var ed=function(a){return function(b){return!(320==b.minWidth()&&(a&&50==b.height()||!a&&100==b.height()))}};var Y=function(a,b){W.call(this,a,b)};r(Y,W);Y.prototype.B=function(a){return Math.min(1200,Math.round(a))};var fd=[new Y(468,350),new Y(414,1380),new Y(384,1280),new Y(375,1250),new Y(360,1200),new Y(320,1070),new Y(120,600)],gd=[new Y(468,320),new Y(414,1380),new Y(384,1280),new Y(375,1250),new Y(360,1200),new Y(320,1070),new Y(300,1000),new Y(280,950),new Y(250,825),new Y(120,600)],hd=function(a,b){var c=dd(a,$c(b));if(!c)throw new V("adsbygoogle.push() error: No autorelaxed size for width="+b+"px");return c};var Z=function(a,b){W.call(this,a,b)};r(Z,W);Z.prototype.B=function(){return this.minWidth()};Z.prototype.J=function(a){return Z.sa.J.call(this,a)+"_0ads_al"};var id=[new Z(728,15),new Z(468,15),new Z(200,90),new Z(180,90),new Z(160,90),new Z(120,90)];var md=function(){var a=window;if(void 0===a.google_dre){var b="";a.postMessage&&Bb(a)&&!(x("iPad")||x("Android")&&!x("Mobile")||x("Silk"))&&(x("iPod")||x("iPhone")||x("Android")||x("IEMobile"))&&(b=Ra(["20050000","20050001"],sa))&&(a.google_ad_modifications=a.google_ad_modifications||{},a.google_ad_modifications.eids=a.google_ad_modifications.eids||[],a.google_ad_modifications.eids.push(b));a.google_dre=b;"20050001"==a.google_dre&&(Xa(a.top,"message",C("dr::mh",fa(jd,a),fa(kd,a))),a.setTimeout(C("dr::to",
fa(ld,a,!0),fa(kd,a)),2E3),a.google_drc=0,a.google_q=a.google_q||{},a.google_q.tags=a.google_q.tags||[])}},nd=function(a){"20050001"==l.google_dre&&(a.params=a.params||{},a.params.google_delay_requests_delay=0,a.params.google_delay_requests_count=l.google_drc++,a.ba=ga())},od=function(a){if("20050001"==l.google_dre){var b=ga()-a.ba;a.params.google_delay_requests_delay=b}},jd=function(a,b){var c;if(c=b&&"afb"==b.data)c=b.origin,c=!!zb[c]||wa&&Ab.test(c);c&&ld(a,!1)},ld=function(a,b){if(a.google_q&&
a.google_q.tags){var c=a.google_q.tags;kd(a);c.length&&(b&&Hb("drt",{Ya:c.length,duration:2E3},1),pd(c))}};var Db=function(a){a.shv=va()};A.N=!wa;var qd=function(a){return yb.test(a.className)&&"done"!=a.getAttribute("data-adsbygoogle-status")},sd=function(a,b){var c=window;a.setAttribute("data-adsbygoogle-status","done");rd(a,b,c)},rd=function(a,b,c){td(a,b,c);if(!ud(a,b,c)){if(b.google_reactive_ads_config){if(vd)throw new V("adsbygoogle.push() error: Only one 'enable_page_level_ads' allowed per page.");vd=!0}else b.google_ama||xb(c);wd||(wd=!0,Vc(c,b.google_ad_client));H(Xb,function(a,d){b[d]=b[d]||c[d]});b.google_loader_used="aa";b.google_reactive_tag_first=
1===xd;var d=b.google_ad_output;if(d&&"html"!=d)throw new V("adsbygoogle.push() error: No support for google_ad_output="+d);Fb("aa::load",Gb,function(){Uc(c,b,a)})}},ud=function(a,b,c){var d=b.google_reactive_ads_config;if(d)var e=d.page_level_pubvars,f=(ca(e)?e:{}).google_tag_origin;if(b.google_ama)return!1;var g=b.google_ad_slot,e=c.google_ad_modifications;!e||cc(e.ad_whitelist,g,f||b.google_tag_origin)?e=null:(f=e.space_collapsing||"none",e=(g=cc(e.ad_blacklist,g))?{S:!0,Y:g.space_collapsing||
f}:e.remove_ads_by_default?{S:!0,Y:f}:null);return e&&e.S&&"on"!=b.google_adtest?("slot"==e.Y&&(null!==Wa(a.getAttribute("width"))&&a.setAttribute("width",0),null!==Wa(a.getAttribute("height"))&&a.setAttribute("height",0),a.style.width="0px",a.style.height="0px"),!0):!(e=Pa(a,c))||"none"!=e.display||"on"==b.google_adtest||0<b.google_reactive_ad_format||d?!1:(c.document.createComment&&a.appendChild(c.document.createComment("No ad requested because of display:none on the adsbygoogle tag")),!0)},td=
function(a,b,c){for(var d=a.attributes,e=d.length,f=0;f<e;f++){var g=d[f];if(/data-/.test(g.name)){var h=g.name.replace("data","google").replace(/-/g,"_");if(!b.hasOwnProperty(h)){var k;k=h;var g=g.value,p={google_reactive_ad_format:ia,google_allow_expandable_ads:ja};k=p.hasOwnProperty(k)?p[k](g,null):g;null===k||(b[h]=k)}}}if(b.google_enable_content_recommendations&&1==b.google_reactive_ad_format)b.google_ad_width=S(c).clientWidth,b.google_ad_height=50,a.style.display="none";else if(1==b.google_reactive_ad_format)b.google_ad_width=
320,b.google_ad_height=50,a.style.display="none";else if(8==b.google_reactive_ad_format)d=wc(c)?c.screen.width||0:S(c).clientWidth||0,b.google_ad_width=d,c=wc(c)?c.screen.height||0:S(c).clientHeight||0,b.google_ad_height=c,a.style.display="none";else if(9==b.google_reactive_ad_format)b.google_ad_width=S(c).clientWidth||0,b.google_ad_height=S(c).clientHeight||0,a.style.display="none";else if(d=b.google_ad_format,"autorelaxed"==d?(zc(b,c,Nb.l,Nb.j),f=J(bc(c),Nb.j)?3:2):f="auto"==d||/^((^|,) *(horizontal|vertical|rectangle) *)+$/.test(d)?
1:"link"==d?4:void 0,f){b.google_auto_format=b.google_ad_format;d=a.offsetWidth;a:switch(e=b.google_ad_format,f){default:case 1:var m;if("auto"==e)m=.25>=d/Math.min(1200,S(c).clientWidth)?4:3;else{f=0;for(m in Wc)-1!=e.indexOf(m)&&(f|=Wc[m]);m=f}e=m;b&&(b.google_responsive_formats=e);m=Yc.slice(0);if(J(M(c),K.R.j))for(f=m.length-1;0<f;f--)h=Math.floor(Math.random()*(f+1)),k=m[f],m[f]=m[h],m[h]=k;f=488>S(c).clientWidth;c=[$c(d),ed(f),bd(f,c,a),Xc(e)];c=dd(m,cd(c));if(!c)throw new V("adsbygoogle.push() error: No slot size for availableWidth="+
d);break a;case 2:c=hd(fd,d);break a;case 3:c=hd(gd,d);break a;case 4:if(c=dd(id,$c(d)),!c)throw new V("adsbygoogle.push() error: No link unit size for width="+d+"px");}b.google_ad_width=c.B(d);m=b.google_ad_height=c.height();a.style.height=m+"px";b.google_ad_resizable=!0;b.google_ad_format=c.J(d);b.google_override_format=1;b.google_loader_features_used=128}else!Va.test(b.google_ad_width)&&!Ua.test(a.style.width)||!Va.test(b.google_ad_height)&&!Ua.test(a.style.height)?(c=Pa(a,c),a.style.width=c.width,
a.style.height=c.height,Zc(c,b),b.google_ad_width||(b.google_ad_width=a.offsetWidth),b.google_ad_height||(b.google_ad_height=a.offsetHeight),b.google_loader_features_used=256):(Zc(a.style,b),b.google_ad_output&&"html"!=b.google_ad_output||300!=b.google_ad_width||250!=b.google_ad_height||(c=a.style.width,a.style.width="100%",d=a.offsetWidth,a.style.width=c,b.google_available_width=d))},yd=function(a){for(var b=document.getElementsByTagName("ins"),c=0,d=b[c];c<b.length;d=b[++c]){var e=d;if(qd(e)&&"reserved"!=
e.getAttribute("data-adsbygoogle-status")&&(!a||d.id==a))return d}return null},vd=!1,xd=0,wd=!1,Ad=function(a){var b;try{b=l.localStorage.getItem("google_ama_config")}catch(f){b=null}if(b=null!=b?new pc(dc(b)):null){var c;b.m||(b.m={});b.m[3]||(c=R(b,3))&&(b.m[3]=new qc(c));if(c=(c=b.m[3])?R(c,1)>ga():!1)if(c=Jb(l),ba(c)){b:{b=ic(b,mc);for(var d=0;d<b.length;d++){var e=b[d];if(tc(e,c)){b=e;break b}}b=null}if(b){if((c=R(b,3))&&c.length)for(b=R(b,3),c=l.google_ad_modifications=l.google_ad_modifications||
{},c=c.loeids=c.loeids||[],d=0;d<b.length;d++)c.push(b[d]);c=!0}else c=!1}else c=!1;if(c)b=zd(),l.document.documentElement.appendChild(b),sd(b,{google_ama:!0,google_ad_client:a});else try{l.localStorage.removeItem("google_ama_config")}catch(f){a={lserr:1},l.location.href&&l.location.href.substring&&(a.url=l.location.href.substring(0,200)),Hb("ama",a,.01)}}},kd=function(a){a.google_q.tags=void 0},pd=function(a){if(a&&a.shift)try{for(var b,c=20;0<a.length&&(b=a.shift())&&0<c;)Bd(b),--c}catch(d){throw window.setTimeout(Cd,
0),d;}},zd=function(){var a=document.createElement("ins");a.className="adsbygoogle";a.style.display="none";return a},Dd=function(a,b){var c={};H(uc,function(b,d){a.hasOwnProperty(d)&&(c[d]=a[d])});ca(a.enable_page_level_ads)&&(c.page_level_pubvars=a.enable_page_level_ads);var d=zd();b?F.body.appendChild(d):F.documentElement.appendChild(d);sd(d,{google_reactive_ads_config:c,google_ad_client:a.google_ad_client})},Ed=function(a){if(!Bb(window))throw new V("adsbygoogle.push() error: Page-level tag does not work inside iframes.");
var b=J(M(G),K.P.j),c=!b;F.body||b?Dd(a,c):Xa(F,"DOMContentLoaded",C("aa:reactiveTag",function(){Dd(a,c)},void 0))},Fd=function(a,b,c,d){if(0==b.message.indexOf("TagError")){var e={};fb(A,e,d);e.context=a;e.msg=b.message.substring(0,512);a=l.document;e.url=a.URL.substring(0,512);e.ref=(a.referrer||"").substring(0,512);ab(Cb,"puberror",e,!0,c||.01);return!1}return A.w(a,b,c,d)},Gd=function(a,b,c,d){return 0==b.message.indexOf("TagError")?!1:A.w(a,b,c,d)},Bd=function(a){var b={};Fb("aa::hqe",Fd,function(){Hd(a,
b)},function(c){c.client=c.client||b.google_ad_client||a.google_ad_client;c.slotname=c.slotname||b.google_ad_slot;c.tag_origin=c.tag_origin||b.google_tag_origin})},Hd=function(a,b){ha=(new Date).getTime();if(l.google_q&&l.google_q.tags)nd(a),l.google_q.tags.push(a);else{var c;a:{if(a.enable_page_level_ads){if("string"==typeof a.google_ad_client){c=!0;break a}throw new V("adsbygoogle.push() error: 'google_ad_client' is missing from the tag config.");}c=!1}if(c)0===xd&&(xd=1),Ad(a.google_ad_client),
Ed(a);else{0===xd&&(xd=2);l.google_q?od(a):(md(),nd(a));c=a.element;var d=a.params;d&&H(d,function(a,c){b[c]=a});if(c){if(!qd(c)&&(c=c.id?yd(c.id):null,!c))throw new V("adsbygoogle.push() error: 'element' has already been filled.");if(!("innerHTML"in c))throw new V("adsbygoogle.push() error: 'element' is not a good DOM element.");}else if(c=yd(),!c)throw new V("adsbygoogle.push() error: All ins elements in the DOM with class=adsbygoogle already have ads in them.");sd(c,b)}}},Cd=function(){Eb();Fb("aa::main",
Gd,Id)},Id=function(){var a=G.google_ad_modifications=G.google_ad_modifications||{};if(!a.plle){a.plle=!0;var b=a.eids=a.eids||[],a=a.loeids=a.loeids||[],c,d;c=K.$;d=c.j;if(G.location&&G.location.hash=="#google_plle_"+d)c=d;else{c=[c.l,d];d=new Ib(ma,ma+na-1);var e;(e=0>=na||na%c.length)||(e=xc.na,e=!(e.start<=d.start&&e.end>=d.end));e?c=null:(e=Jb(G),c=null!==e&&d.start<=e&&d.end>=e?c[(e-ma)%c.length]:null)}c&&a.push(c);c=Nb;(c=yc(oa,c.l,c.j))&&b.push(c);c=K.R;(d=yc(pa,c.l,c.j))&&a.push(d);(c=d==
c.l?Mb.l:d==c.j?Mb.j:"")&&b.push(c);c=K.O;(b=yc(ta,c.l,c.j))&&a.push(b);F.body||(c=K.P,(b=yc(ua,c.l,c.j))&&a.push(b))}a=window.adsbygoogle;pd(a);if(!a||!a.loaded){window.adsbygoogle={push:Bd,loaded:!0};a&&Jd(a.onload);try{Object.defineProperty(window.adsbygoogle,"onload",{set:Jd})}catch(f){}}},Jd=function(a){I(a)&&window.setTimeout(a,0)};Cd();}).call(this);
