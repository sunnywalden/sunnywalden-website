$(document).ready(function(){	
	
	
/*	
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
	$.lrc.init($('#lrc_content').val());
	timeupdate: function(event) {
			 if(event.jPlayer.status.currentTime==0){
				time = "";
			 }else {
				time = event.jPlayer.status.currentTime;
			 }
		},
	play: function(event) {
			//点击开始方法调用lrc.start歌词方法 返回时间time
			if($('#lrc_content').val()!==""){
				$.lrc.start(function(){
					return time;
				});
			}else{
			 $(".content").html("没有字幕");
			}
	},
*/		
		
		
  var playlist = [{
      title:"想听听你说谎",
      artist:"金莎",
      mp3:"musics/金莎 - 想听听你说谎.wav",
      lrc:"lrc/金莎 - 想听听你说谎.lrc",
      poster: "images/金莎1.jpg"
    },{
      title:"星月神话",
      artist:"金莎",
      mp3:"musics/金莎 - 星月神话.mp3",
      lrc:"lrc/金莎 - 星月神话.lrc",
      poster: "images/金莎2.jpg"
    },{
      title:"玫瑰与小鹿",
	    artist:"周深",
      mp3: "musics/周深 - 玫瑰与小鹿.mp3",
      lrc:"lrc/周深 - 玫瑰与小鹿.lrc",
      poster: "images/金莎3.jpg"
      },{
      title:"Blowin' In The Wind",
      artist:"Bob Dylan",
      mp3:"musics/Bob Dylan - Blowin' In The Wind.mp3",
      lrc:"lrc/Bob Dylan - Blowin' In The Wind.lrc",
      poster: "images/BobDylan.jpg"
    },{
      title:"西安爱情故事",
      artist:"王筝",
      mp3:"musics/王筝 - 西安爱情故事.mp3",
      lrc:"lrc/王筝 - 西安爱情故事.lrc",
      poster: "images/王筝.jpg"
    }
    ];
  
  
  var cssSelector = {
    jPlayer: "#jquery_jplayer",
    cssSelectorAncestor: ".music-player"
  };
  
  var options = {
    swfPath: "Jplayer.swf",
    supplied: "ogv, m4v, oga, mp3, ape, flac"
  };
  
  var myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);
  
});