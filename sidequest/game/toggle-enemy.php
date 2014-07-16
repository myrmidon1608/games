			
			<?php include('baddies.php'); ?>
			
			<script type="text/javascript">
			
			function battle(range, area) {
				var pct = (Math.floor(Math.random() * range)) + 1;
				var ecr = (Math.floor(Math.random() * 3)) + 1;
				var d = 2000;
				var w = 200;
				var a = area;
				
				updateStats();
		
				if(pct < 100 && pct >= 1) {
					
					$('#arrows').css('display', 'none');
					$('#battle').css('display', '');
					$('#ta').css('display', '');
					$('#enter-btl').css('display', '');
					$('#exit-btl').css('display', '');
					$('#deny-esc').css('display', 'none');
		
					if(ecr == 1) {
						$('#encounter').css('left', '-351px').fadeIn(0);
						for(i = 1; i < 10; i++) {
							var t = "row" + i;
							$('#' + t).delay(w*i).animate({marginLeft:'351px'}, 400);	
						}
					}
					else if(ecr == 2) {
						$('#encounter').css('left', '351px').fadeIn(0);
						for(i = 1; i < 10; i++) {
							var t = "row" + i;
							$('#' + t).delay(w*i).animate({marginLeft:'-351px'}, 400);	
						}
					}
					else if(ecr == 3) {
						$('#encounter2').css('top', '-351px').fadeIn(0);
						for(i = 1; i < 10; i++) {
							var t = "col" + i;
							$('#' + t).delay(w*i).animate({marginTop:'351px'}, 400);	
						}
					}
					
					$('#monster').delay(d).fadeIn(400);
					$('#battle-text').delay(d).fadeIn(400);
					$('#pro-stats').delay(d).fadeIn(400);

					var badid;
					
					if(a == "world") {
						$('#bad-world').css('display', '');
						$('#bad-mine').css('display', 'none');
						$('#mine-boss').css('display', 'none');
						$('#bad-tower').css('display', 'none');
						$('#tower-boss').css('display', 'none');
						$('#bad-blessed').css('display', 'none');
						$('#blessed-boss').css('display', 'none');
						
						if(pct <= 40 && pct >= 1) {
							badid = 2;
						}
						else if(pct <= 70 && pct >= 41) {
							badid = 3;
						}
						else if(pct <= 100 && pct >= 71) {
							badid = 4;
						}
					}
					else if(a == "mine") {
						$('#bad-world').css('display', 'none');
						$('#bad-mine').css('display', '');
						$('#mine-boss').css('display', 'none');
						$('#bad-tower').css('display', 'none');
						$('#tower-boss').css('display', 'none');
						$('#bad-blessed').css('display', 'none');
						$('#blessed-boss').css('display', 'none');
						
						if(pct <= 50 && pct >= 1) {
							badid = 5;
						}
						else if(pct <= 70 && pct >= 51) {
							badid = 6;
						}
						else if(pct <= 80 && pct >= 71) {
							badid = 7;
						}
						else if(pct <= 95 && pct >= 81) {
							badid = 8;
						}
						else if(pct <= 100 && pct >= 96) {
							badid = 9;
						}
					}
					else if(a == "mineboss") {
						badid = 14;
						
						$('#bad-world').css('display', 'none');
						$('#bad-mine').css('display', 'none');
						$('#mine-boss').css('display', '');
						$('#bad-tower').css('display', 'none');
						$('#tower-boss').css('display', 'none');
						$('#bad-blessed').css('display', 'none');
						$('#blessed-boss').css('display', 'none');
						$('#exit-btl').css('display', 'none');
					}
					else if(a == "tower") {
						$('#bad-world').css('display', 'none');
						$('#bad-mine').css('display', 'none');
						$('#mine-boss').css('display', 'none');
						$('#bad-tower').css('display', '');
						$('#tower-boss').css('display', 'none');
						$('#bad-blessed').css('display', 'none');
						$('#blessed-boss').css('display', 'none');
			
						if(pct <= 40 && pct >= 1) {
							badid = 4;
						}
						else if(pct <= 50 && pct >= 41) {
							badid = 10;
						}
						else if(pct <= 70 && pct >= 51) {
							badid = 11;
						}
						else if(pct <= 90 && pct >= 71) {
							badid = 12;
						}
						else if(pct <= 100 && pct >= 91) {
							badid = 13;
						}
					}
					else if(a == "towerboss") {
						badid = 15;
						
						$('#bad-world').css('display', 'none');
						$('#bad-mine').css('display', 'none');
						$('#mine-boss').css('display', 'none');
						$('#bad-tower').css('display', 'none');
						$('#tower-boss').css('display', '');
						$('#bad-blessed').css('display', 'none');
						$('#blessed-boss').css('display', 'none');
						$('#exit-btl').css('display', 'none');
						$('#kolopassive').fadeIn(0);
					}
					else if(a == "blessed") {
						$('#bad-world').css('display', 'none');
						$('#bad-mine').css('display', 'none');
						$('#mine-boss').css('display', 'none');
						$('#bad-tower').css('display', 'none');
						$('#tower-boss').css('display', 'none');
						$('#bad-blessed').css('display', '');
						$('#blessed-boss').css('display', 'none');
			
						if(pct <= 30 && pct >= 1) {
							badid = 16;
						}
						else if(pct <= 50 && pct >= 31) {
							badid = 17;
						}
						else if(pct <= 70 && pct >= 51) {
							badid = 18;
						}
						else if(pct <= 85 && pct >= 71) {
							badid = 19;
						}
						else if(pct <= 95 && pct >= 86) {
							badid = 20;
						}
						else if(pct <= 100 && pct >= 96) {
							badid = 21;
						}
					}
					else if(a == "blessedboss") {
						badid = 22;
						
						$('#bad-world').css('display', 'none');
						$('#bad-mine').css('display', 'none');
						$('#mine-boss').css('display', 'none');
						$('#bad-tower').css('display', 'none');
						$('#tower-boss').css('display', 'none');
						$('#bad-blessed').css('display', 'none');
						$('#blessed-boss').css('display', '');
						$('#exit-btl').css('display', 'none');
						$('#idol-normal').fadeIn(0);
					}
					
					$.ajax({
						type: "POST",
						url: "php/baddiecheck.php?bid=" + badid,
						dataType: "json",
						success: function(stat) {
							$('<span class="badname">' + stat.bn.toUpperCase() + '</span>').appendTo('.monster-name');
							var b = stat.id;
								
							if(a == "world") {
								if (b == 2) {
									$('#oquatoo').css('display', '');
									$('#chaweon').css('display', 'none');
									$('#w-loyios').css('display', 'none');
								}
								else if (b == 3) {
									$('#oquatoo').css('display', 'none');
									$('#chaweon').css('display', '');
									$('#w-loyios').css('display', 'none');
								}
								else if (b== 4) {
									$('#oquatoo').css('display', 'none');
									$('#chaweon').css('display', 'none');
									$('#w-loyios').css('display', '');
								}
							}
							else if(a == "mine") {
								if (b == 5) {
									$('#loobat').css('display', '');
									$('#shock').css('display', 'none');
									$('#m-loyios').css('display', 'none');
									$('#lost-soul').css('display', 'none');
									$('#sawyrm').css('display', 'none');
								}
								else if (b == 6) {
									$('#loobat').css('display', 'none');
									$('#shock').css('display', '');
									$('#m-loyios').css('display', 'none');
									$('#lost-soul').css('display', 'none');
									$('#sawyrm').css('display', 'none');
								}
								else if (b == 7) {
									$('#loobat').css('display', 'none');
									$('#shock').css('display', 'none');
									$('#m-loyios').css('display', '');
									$('#lost-soul').css('display', 'none');
									$('#sawyrm').css('display', 'none');
								}
								else if (b == 8) {
									$('#loobat').css('display', 'none');
									$('#shock').css('display', 'none');
									$('#m-loyios').css('display', 'none');
									$('#lost-soul').css('display', '');
									$('#sawyrm').css('display', 'none');
								}
								else if (b == 9) {
									$('#loobat').css('display', 'none');
									$('#shock').css('display', 'none');
									$('#m-loyios').css('display', 'none');
									$('#lost-soul').css('display', 'none');
									$('#sawyrm').css('display', '');
								}
							}
							else if(a == "tower") {
								if (b == 4) {
									$('#w-loyios2').css('display', '');
									$('#f-loyios').css('display', 'none');
									$('#bandkin').css('display', 'none');
									$('#skuloyios').css('display', 'none');
									$('#zealot').css('display', 'none');
								}
								else if (b == 10) {
									$('#w-loyios2').css('display', 'none');
									$('#f-loyios').css('display', '');
									$('#bandkin').css('display', 'none');
									$('#skuloyios').css('display', 'none');
									$('#zealot').css('display', 'none');
								}
								else if (b == 11) {
									$('#w-loyios2').css('display', 'none');
									$('#f-loyios').css('display', 'none');
									$('#bandkin').css('display', '');
									$('#skuloyios').css('display', 'none');
									$('#zealot').css('display', 'none');
								}
								else if (b == 12) {
									$('#w-loyios2').css('display', 'none');
									$('#f-loyios').css('display', 'none');
									$('#bandkin').css('display', 'none');
									$('#skuloyios').css('display', '');
									$('#zealot').css('display', 'none');
								}
								else if (b == 13) {
									$('#w-loyios2').css('display', 'none');
									$('#f-loyios').css('display', 'none');
									$('#bandkin').css('display', 'none');
									$('#skuloyios').css('display', 'none');
									$('#zealot').css('display', '');
								}
							}
							else if(a == "blessed") {
								if (b == 16) {
									$('#warosu').css('display', '');
									$('#crystoise').css('display', 'none');
									$('#siren').css('display', 'none');
									$('#blood-spirit').css('display', 'none');
									$('#defender').css('display', 'none');
									$('#craragyn').css('display', 'none');
								}
								else if (b == 17) {
									$('#warosu').css('display', 'none');
									$('#crystoise').css('display', '');
									$('#siren').css('display', 'none');
									$('#blood-spirit').css('display', 'none');
									$('#defender').css('display', 'none');
									$('#craragyn').css('display', 'none');
								}
								else if (b == 18) {
									$('#warosu').css('display', 'none');
									$('#crystoise').css('display', 'none');
									$('#siren').css('display', '');
									$('#blood-spirit').css('display', 'none');
									$('#defender').css('display', 'none');
									$('#craragyn').css('display', 'none');
								}
								else if (b == 19) {
									$('#warosu').css('display', 'none');
									$('#crystoise').css('display', 'none');
									$('#siren').css('display', 'none');
									$('#blood-spirit').css('display', '');
									$('#defender').css('display', 'none');
									$('#craragyn').css('display', 'none');
								}
								else if (b == 20) {
									$('#warosu').css('display', 'none');
									$('#crystoise').css('display', 'none');
									$('#siren').css('display', 'none');
									$('#blood-spirit').css('display', 'none');
									$('#defender').css('display', '');
									$('#craragyn').css('display', 'none');
								}
								else if (b == 21) {
									$('#warosu').css('display', 'none');
									$('#crystoise').css('display', 'none');
									$('#siren').css('display', 'none');
									$('#blood-spirit').css('display', 'none');
									$('#defender').css('display', 'none');
									$('#craragyn').css('display', '');
								}
							}
							
							var bhp = stat.hp;
							var bap = stat.ap;
							var bdp = stat.dp;
							
							var pap = stat.plap;
							var pdp = stat.pldp;
							
							pdmg = pap - bdp;
							bdmg = bap - pdp;
							
							function dmg() {
								if(bdmg >= 0) {
									$('.bad-dmg').replaceWith('<span class="bad-dmg">' + bdmg + '</span>');
								}
								else {
									$('.bad-dmg').replaceWith('<span class="bad-dmg">' + 0 + '</span>');
								}
									
								if(pdmg >= 0) {
									$('.pro-dmg').replaceWith('<span class="pro-dmg">' + pdmg + '</span>');
								}
								else {
									$('.pro-dmg').replaceWith('<span class="pro-dmg">' + 0 + '</span>');
								}
							}

							function bossAttack() {
								var ch = (Math.floor(Math.random() * 7)) + 1;
								
								if(ch == 1 && b == 14) {
									pdmg -= 4;
									bdmg += 5;
								}
								else if(ch == 1 && b == 15) {
									$('#koloactive').fadeIn(0);
									$('#kolopassive').fadeOut(0);
									$('#emy-ini').delay(w).fadeIn(0).delay(d).fadeOut(0, function() {
										emyAttack('boss');
									});
									$('#emy-ini2').delay(d*2 + w*3).fadeIn(0).delay(d).fadeOut(0, function() {
										emyAttack();
										$('#kolopassive').fadeIn(0);
										$('#koloactive').fadeOut(0);
									});
								}
								else if(b == 22 && bhp <= 100) {
									$('#idol-possessed').fadeIn(0);
									$('#idol-normal').fadeOut(0);
									bdmg += 10;
									$('#emy-ini').delay(w*2).fadeIn(0).delay(d).fadeOut(0, function() {
										emyAttack();
									});
								}
								else {
									$('#emy-ini').delay(w).fadeIn(0).delay(d).fadeOut(0, function() {
										emyAttack();
									});
								}
							}
							
							function emyAttack(type) {
								var eac = (Math.floor(Math.random() * 10)) + 1;
								var t = type;
								
								if (eac !== 1) {
										
									$.ajax({
										type: "POST",
										url: "php/healthcheck.php?bd=" + bdmg,
										dataType: "json",
										success: function(hp) {
											var hp;
											if(hp.hp >= 0) {
												hp = hp.hp;
											}
											else {
												hp = 0;
											}
											$('#curhp').replaceWith('<span id="curhp">HP : ' + hp + '</span>');
											$('#emy-suc').fadeIn(0).delay(d).fadeOut(0, function() {				
												if(hp == 0) {
													$('#char-dead').fadeIn(0).delay(d).fadeOut(0, function() {
														$('#monster').fadeOut(1000);
														$('#battle-text').fadeOut(1000, function() {
															$.ajax({
																type: "POST",
																url: "php/inncheck.php",
																dataType: "json",
																success: function(inn) {
																	$('#cont').fadeIn(1000);
																}
															});
														});
													});
												}
												else if (t == "boss") {$('#ta').fadeOut(0);}
												else {
													$('#ta').fadeIn(0);
												}
											});
										}
									});
								}
								else{
									$('#emy-fail').delay(w).fadeIn(0).delay(d).fadeOut(0, function() {
										$('#ta').fadeIn(0);
									});
								}
							}
														
							var lexp = stat.lxp;
							var hexp = stat.hxp;
							
							document.getElementById('attack').onclick = function() {
								var pac = Math.floor(Math.random() * 10) + 1;
								var eac = Math.floor(Math.random() * 10) + 1;
								var range = parseInt(hexp - lexp);
								
								dmg();
								
								$('#ta').css('display', 'none');
								$('#enter-btl').fadeOut(0);
								$('#atk-ini').fadeIn(0).delay(d).fadeOut(0, function () {
									if (pac !== 1) {
										bhp -= pdmg;
										$('#atk-suc').delay(w).fadeIn(0).delay(d).fadeOut(0, function() {
											if (bhp > 0) {
												if(b == 15) {
													bossAttack();
												}
												else if(b == 22 && bhp <= 100) {
													bossAttack();
												}
												else {
													$('#emy-ini').delay(w*2).fadeIn(0).delay(d).fadeOut(0, function() {
														emyAttack();
													});
												}
											}
											else {
												var xp = parseInt(lexp) + Math.floor(Math.random() * range);
												
												$('#monster').css('display', 'none');
												$('#def-emy').fadeIn(0).delay(d).fadeOut(0, function() {
													$('.experience').replaceWith('<span class="experience">' + xp + '</span>');
													$('#gain-xp').fadeIn(0).delay(d).fadeOut(0, function() {
													
														$.ajax({
															type: "POST",
															url: "php/expcheck.php?exp=" + xp,
															dataType: "json",
															success: function(xp) {
																var lv = xp.lv;
																var hp = xp.hp;
																var nh = Math.floor(Math.random() * parseInt(lv)) + 3;
																var na = Math.floor(Math.random() * 2);
																var nd = Math.floor(Math.random() * 2);
																
																$('.level').replaceWith('<span class="level">' + lv + '</span>');
																$('#level-up').fadeIn(0).delay(d).fadeOut(0);

																$.ajax({
																	type: "POST",
																	url: "php/expcheck.php",
																	data:{hp:nh, atk:na, def:nd},
																	dataType: "json"
																});
															}
														});
														
														$('#battle').delay(d).fadeOut(500, function() {
															$('#monster').css('display', 'none');
															$('#battle-text').css('display', 'none');
															$('#pro-stats').css('display', 'none');
															for(i = 1; i < 10; i++) {
															var t = "row" + i;
															$('#' + t).css('margin-left', '0px');
															}
															for(i = 1; i < 10; i++) {
																var t = "col" + i;
																$('#' + t).css('margin-top', '0px');
															}
															if(b == 14 || b == 15 || b == 22) {
																location.reload(true);
															}
														});
														$('#arrows').css('display', '');
														$('.badname').remove();	
													});	
												});
											}
										});
									}
									else {
										$('#atk-fail').fadeIn(0).delay(d).fadeOut(0, function() {
											if(b == 15) {
												bossAttack();
											}
											else if(b == 22 && bhp <= 100) {
												bossAttack();
											}
											else {
												$('#emy-ini').delay(w*2).fadeIn(0).delay(d).fadeOut(0, function() {
													emyAttack();
												});
											}
										});
									}
								});
							}
							
							document.getElementById('exit-btl').onclick = function() {
								var run = (Math.floor(Math.random() * 5)) + 1;
								
								dmg();
					
								$('#enter-btl').css('display', 'none');
								if (run !== 1) {
									$('#suc-esc').fadeIn(0).delay(d).fadeOut(0, function() {
										$('#battle').fadeOut(500, function() {
											$('#monster').css('display', 'none');
											$('#battle-text').css('display', 'none');
											$('#pro-stats').css('display', 'none');
											for(i = 1; i < 10; i++) {
											var t = "row" + i;
											$('#' + t).css('margin-left', '0px');
											}
											for(i = 1; i < 10; i++) {
												var t = "col" + i;
												$('#' + t).css('margin-top', '0px');
											}
										});
										$('#arrows').css('display', '');
										$('.badname').remove();
									});
								}
								else {
									var eac = (Math.floor(Math.random() * 13)) + 1;
									
									$('#ta').fadeOut(0);
									$('#deny-esc').fadeIn(0).delay(d).fadeOut(0, function() {
										$('#emy-ini').delay(w).fadeIn(0).delay(d).fadeOut(0, function() {
											emyAttack();
										});
									});
								}
							}
						}
					});
				}
					
				else {
					$('#arrows').css('display', '');
					$('#exit-btl').css('display', '');
					$('#battle').css('display', 'none');
					$('#monster').css('display', 'none');
					$('#battle-text').css('display', 'none');
					$('#pro-stats').css('display', 'none');
				}
			}
			</script>
				