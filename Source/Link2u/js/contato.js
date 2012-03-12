var Class = {create: function() {return function() {this.initialize.apply(this, arguments);}}};
var Strings = Class.create();
Strings = {
    initialize:function(str){this.whitespace=new String(' \t\n\r');this.s=new String(str);},
    LTrim:function(str){this.initialize(str);if(this.whitespace.indexOf(this.s.charAt(0))!=-1){var j=0,i=this.s.length;while(j<i&&this.whitespace.indexOf(this.s.charAt(j))!=-1){j++;this.s=this.s.substring(j,i);}}return this.s;},
    RTrim:function(str){this.initialize(str);if(this.whitespace.indexOf(this.s.charAt(this.s.length-1))!=-1){var i=this.s.length-1;while(i>=0&&this.whitespace.indexOf(this.s.charAt(i))!=-1){i--;this.s=this.s.substring(0,i+1);}}return this.s;},
    Trim:function(str){this.initialize(str);return this.RTrim(this.LTrim(str));}
};
var Valid = Class.create();
Valid = {
  email : function (s) {
    if (Strings.Trim(s) == '') return true;               
    var emailPat = /^(.+)@(.+)$/;
    var specialChars = "\\(\\)<>@,';:\\\\\\\"\\.\\[\\]";
    var validChars = "\[^\\s" + specialChars + "\]";
    var quotedUser = "(\"[^\"]*\")";
    var ipDomainPat = /^(\d{1,3})[.](\d{1,3})[.](\d{1,3})[.](\d{1,3})$/;
    var atom = validChars + '+';
    var word = '(' + atom + '|' + quotedUser + ')';
    var userPat = new RegExp('^' + word + '(\\.' + word + ')*$');
    var domainPat = new RegExp('^' + atom + '(\\.' + atom + ')*$');
    var matchArray = s.match(emailPat);
    if (matchArray == null) return false;
    var user = matchArray[1];
    var domain = matchArray[2];    
    if (user.match(userPat) == null) return false;
    var IPArray = domain.match(ipDomainPat);
    if (IPArray != null){
        for (var i = 1; i <= 4; i++){ if (IPArray[i] > 255){ return false; } }
        return true;
    }
    var domainArray = domain.match(domainPat);
    if (domainArray == null) return false;                
    var atomPat = new RegExp(atom,'g');
    var domArr = domain.match(atomPat);
    var len = domArr.length;
    if ((domArr[domArr.length-1].length < 2) || (domArr[domArr.length-1].length > 3)) return false;
    if (len < 2) return false;    
    return true;
  },
  date : function (s){
    if (Strings.Trim(s) == "" ) return false;
    var err=0;
    dtaValue=s;
    if (dtaValue.length != 8 && dtaValue.length != 10 ) err=1;
    mm = dtaValue.substring(3, 5);
    dd = dtaValue.substring(0, 2);
    yy = dtaValue.substring(6, 10);
    if (mm<1 || mm>12) err = 1;
    if (dd<1 || dd>31) err = 1;
    if (yy.length == 4){ 
      if (yy<1900) err = 1;
    } else {
      yy=parseInt(yy,10);
      yy += yy<30?2000:1900;
    }
    if (mm==4 || mm==6 || mm==9 || mm==11) {
      if (dd==31) err=1;
    } 
    if (mm==2) {
      var dtaYear=parseInt(yy/4);
      if (isNaN(dtaYear)) err=1;
      if (dd>29) err=1;
      if (dd==29 && ((yy/4)!=parseInt(yy/4))) err=1;
    }

    if (err==1) {
      if (dtaValue.length < 8) {
        return false;
      } else {
        return false;
      }
    }
    return true;
  },
  forms: function(i) {
    jQuery(i).find('.data').each(function(){
        if(!CheckDate(this.value)) {
            return false;
        }
    });
    jQuery(i).find('.datahora').each(function(){
        if(!CheckDate(this.value.substr(0,10))) {
            return false;
        }
    });
    jQuery(i).find('.email').each(function(){
        if(!Valid.email(this.value)) {
            //Box.alert('O E-Mail '+this.value+' parece inválido.');
            return false;
        }
    });
  }
};
var request = {
    getParameter: _getParameter
};
function _getParameter(querystring) {
    var querystr = new Array();
    loc = window.location.search.substr(1).split('&');
    if ((loc!='')&&(loc!=null)) {
        for (var icnt=0;icnt< loc.length;icnt++) {
            var q = loc[icnt].split('=');
            querystr[q[0]] = q[1];
        }
        return querystr[querystring];
    } else {
        return(null);
    }
}
jQuery(window).load(function(){
    var sm = request.getParameter('sm');
    if (sm!==null && sm!='') {
        $.colorbox({
            href:'#inline_content', 
            inline: true
        });
    }
    jQuery('input').keypress(function(){
       jQuery(this).removeClass('field-error');
       jQuery('#messages').css('display', 'none');
    });
    jQuery('#fone').mask('(99) 9999-9999', {});
    jQuery('#fone[title]').inputHints();
    jQuery('.send-form').click(function(e){
        e.preventDefault();
        oNome = jQuery('#nome');
        oEmail = jQuery('#email');
        messages = jQuery('#messages');
        if (Strings.Trim(oNome.val())=='') {
            messages.html('O Campo Nome &eacute; obrigat&oacute;rio');
            messages.css('display', 'block');
            oNome.addClass('field-error');
            oNome.focus();
            return false;
        }
        if (Strings.Trim(oEmail.val())=='') {
            messages.html('O Campo E-mail &eacute; obrigat&oacute;rio');
            messages.css('display', 'block');
            oEmail.addClass('field-error');
            oEmail.focus();
            return false;
        }
        if (!Valid.email(oEmail.val())) {
            messages.html('O E-mail informado parece inv&aacute;lido');
            messages.css('display', 'block');
            oEmail.addClass('field-error');
            oEmail.focus();
            return false;
        }
    });
});