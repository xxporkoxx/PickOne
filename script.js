// JavaScript Document
$(document).ready(function(){
	$(".trofeu").mouseenter(function(){
		$(this).animate({width:'135px',
						height:'135px',
						opacity:'1'});
		});
	$(".trofeu").mouseout(function(){
		$(this).animate({width:'130px',
						height:'130px',
						opacity:'0.8'});
		});
	});