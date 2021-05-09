
<HTML>
 <HEAD>
  <meta charset="utf-8">
  <TITLE> 새우편번호검색 </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
	<link rel="stylesheet" type="text/css" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/style2.css"/>

    <link rel="stylesheet" href="./css/font-awesome.css">
	  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./themes/bootstrap/easyui.css">    
	<link rel="stylesheet" type="text/css" href="./themes/icon.css">    

	<script type="text/javascript" src="./jquery.min.js"></script>    
	<script type="text/javascript" src="./jquery.easyui.min.js"></script>

	<!--google log-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-66494564-1', 'auto');
	  ga('send', 'pageview');

	</script>

	
	<style>
		@import url("http://fonts.googleapis.com/earlyaccess/nanumgothic.css");

		body{
			font-family:"Nanum Gothic", NanumGothicWeb;
		}
		div{font-family:"Nanum Gothic", NanumGothicWeb;}
		table{font-family:"Nanum Gothic", NanumGothicWeb;}
		td{font-family:"Nanum Gothic", NanumGothicWeb;}


	</style>


<script>

	function doSearch(value,name){

		if(value.length<2)
		{
			alert("검색어는 두글자 이상 입력하십시오.");
			return;
		}else{
//																					alert(name+" " + value);
			var s_str="./addr_detail.php?s_str="+value;

			if(name)
			{
				s_str=s_str+"&s_gbn="+name;
			}
			move_pg("",s_str);
		}

	}

	function move_pg(ttl,addr)
	{
		location.replace(addr);
	}

	function menu_on(obj,i_src)
	{
		obj.src =i_src;
	}
	function menu_off(obj,i_src)
	{
		obj.src =i_src;
	}


	function mp_open(str)
	{
		$("#dialog").html("<iframe src=./map_view.php?addr="+str+" width=100% height=100% frameborder=0 scrolling=no></iframe>");
		$( "#dialog" ).dialog( "open" );
//			return false;
	}


	function new_open(str,str2)
	{
		$("#dialog").html("<iframe src=./new_post_list2.php?post_no="+str+"&before_addr="+str2+" width=100% height=100% frameborder=0 scrolling=no></iframe>");
		$( "#dialog" ).dialog( "open" );
//			return false;
	}

	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 1;
	$(function() {
		$( "#dialog" ).dialog({
			autoOpen: false,
			show: "blind",
			hide: "explode",
			width: "780",
			height: "710",
			modal: "true"

		});

	});


	function chn_color(obj,cl)
	{
		obj.style.background=cl;
	}
	function chk(id)
	{
		location.replace('.mem/mem_view.php?m_id=' + id);
	}
	function map_open(str)
	{
	  var windowW = 780; 
	  var windowH = 510; 
	  var windowX = Math.ceil( (window.screen.width  - windowW) / 2 ); 
	  var windowY = Math.ceil( (window.screen.height - windowH) / 2 ); 


		window.open('./map_view.php?addr='+str,'map_frm','scrollbars=yes,width=780,height=510,top='+windowY+',left='+windowX);
	}
	function new_addr_open(str,str2)
	{
	  var windowW = 900; 
	  var windowH = 650; 
	  var windowX = Math.ceil( (window.screen.width  - windowW) / 2 ); 
	  var windowY = Math.ceil( (window.screen.height - windowH) / 2 ); 


		window.open('./new_post_list.php?post_no='+str+'&before_addr='+str2,'new_frm','scrollbars=yes,width=900,height=650,top='+windowY+',left='+windowX);
	}
	function sel_kor(s){

		window.clipboardData.setData('Text', s);
		alert('클립보드에 복사가 완료되었습니다.\n원하는곳에 붙여넣기(Ctrl+V)를 하세요.');
	}

</script>

</HEAD>
<BODY>

	<table width=100% align=center height=100>
		<td width=100% align=center background="http://fastpost.oceanmate.co.kr/img/top_bg_new_g2.gif">
			<table width=1100 align=center>
				<td>
					<a href=.><font color=white style='color:#fff;font-size:20px;font-family:"Nanum Gothic", NanumGothicWeb;'><b><img src=./img/main_logo.png border=0></a></b></font>			
				</td>
				<td style='padding-top:20px;'>

					<div style='width:100%;height:80px;margin-top:0px;'>
						<table width=100% height=80>
							<td width=20 style='color:#fff;font-size:20px;font-family:"Nanum Gothic", NanumGothicWeb;padding-top:25px;' valign=top align=center>

							</td>
							<td valign=middle style='padding-top:7px;'>
								<input id=s_str class="easyui-searchbox" data-options="menu:'#mm', prompt:'도로명, 건물명, 지번에 대해 통합검색이 가능합니다. (예: 반포대로 58, 국립중앙박물관, 삼성동 25)',searcher:doSearch" style="width:95%;height:40px;font-size:30px;margin-left:100px;" ></input>

									<div id="mm" style='width:100px;'>
										<div data-options="name:'ALL',iconCls:'icon-ok'">전 체</div>
										<div data-options="name:'DORO_NM'">도로명주소</div>
										<div data-options="name:'DONG_NM'">지번주소</div>
										<div data-options="name :'SIGUN_BLD_NM'">건물명</div>
									</div>

									<div style='color:#ffffff;font-size:11px;padding-top:3px;padding-left:80px;'>
										검색창 좌측에 검색대상(도로명/지번/건물명)을 선택후 조회 하시면 좀 더 빠르게 조회하실수 있습니다.
									</div>
							</td>
						</table>

					</div>		

				</td>
				<Td width=170 style='padding-right:30px;padding-top:10px;'>
				<script>
					function op_bn()
					{
						window.open('http://ems-track.net');
					}
				</script>
				<table style='border:1px solid #999999;height:50px;cursor:pointer;background-color:#222222;' onclick=op_bn();>
					<td style='padding-left:5px;'>
						<i class="fa fa-truck fa-2x" style='color:#ffffff;'></i>
					</td>
					<Td style='padding-top:0px;padding-left:10px;'>
						<table width=150>

							<Td>
								<font color=ffffff style="font-size:17px;font-family: 'Nanum Gothic'"><b><font color=0DD9DB>EMS</font>배송조회닷컴</font></b>
							</td>
						</table>

					</td>
					<tr>
					<td colspan=2 style='padding-left:5px;'>
						<font color=aaaaaa style="font-size:11px;font-family: 'Nanum Gothic'">쉬운 전세계 해외택배 배송조회 서비스</font>
					</td>
				</table>
				</td>
			</table>
		</td>
		<tr>
		<td>
			<table width=1100 align=center>
				<td>
						
				</td>
			</table>
		</td>
	</table>

	

	<table width=1080 align=center height=320 valign=middle style='border:5px solid #eee;margin-top:10px;'>
		<td width=100% align=center>
			<center>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- 새우편번호검색_메인 -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:336px;height:280px"
					 data-ad-client="ca-pub-9907646833488095"
					 data-ad-slot="9065996458"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</center>
		</td>
	</table>

	<table width=1100 align=center>
		<td>

<center>



				


				

				


				
				<table><td height=10></td></table>

					<div style='width:1100px;padding:5px;'>



					
							<table width=100% style='border:2px solid #EEEEEE;'>
								<td align=center style='padding-top:20px;padding-bottom:20px;'>
										<CENTER>
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- 새우변번호_중간_가로 -->
										<ins class="adsbygoogle"
											 style="display:inline-block;width:970px;height:90px"
											 data-ad-client="ca-pub-9907646833488095"
											 data-ad-slot="2551084214"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
										</CENTER>
							</table>


					

					</div>

				<table><td height=10></td></table>



					<div style='width:1100px;padding:5px;position:absolute;'>




				</div>

						<div id="p" class="easyui-panel" title="주소상세 리스트" style="width:1100px;padding:5px;">
						

							
						

																					<table width=100% cellpadding="0" cellspacing="0" border="0">
																												<tr><td colspan=8 height=1 bgcolor="E8E0D4"></td></tr>

																												<tr>
																													<td align=left height=40 width=80>
																														<font color='1E4456'>
																														<b>&nbsp;&nbsp;새우편번호
																													</td>
																													<td align=left height=40 width=100>
																														<font color='1E4456'>
																														<b>&nbsp;&nbsp;기존우편번호
																													</td>
																													<td align=left width=350>
																														<font color='1E4456'>
																														<b>도로명주소/영문주소
																													</td>
																													<td align=left width=350>
																														<font color='1E4456'>
																														<b>구지번주소
																													</td>
																													<td align=left height=40 width=120>
																														
																													</td>

																												</tr>

																										<tr><td colspan=8 height=1 bgcolor="E8E0D4"></td></tr>
																					
																					</table>
																					<table width=100% cellpadding="0" cellspacing="0" border="0">

																					
																							<Tr bgcolor=white style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>16979</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								446-573																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('경기도%20용인시%20기흥구%20강남동로%2025-1');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															경기도 용인시 기흥구 강남동로 25-1																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															경기도 용인시 기흥구 구갈동 587-3 <span style='color:red;'><b>강남구</b></span>이촌																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																25-1 Gangnamdong-ro Giheung-gu, Yongin-si Gyeonggi-do																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('경기도%20용인시%20기흥구%20강남동로%2025-1'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('경기도%20용인시%20기흥구%20구갈동%20587-3%20강남구이촌'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																					
																							<Tr bgcolor=E4E9F5 style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>06336</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								135-939																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('서울특별시%20강남구%20개포로%20617-8');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 개포로 617-8																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 개포동 14-2 <span style='color:red;'><b>강남구</b></span> 건강가정지원센터																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																617-8 Gaepo-ro Gangnam-gu Seoul																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20개포로%20617-8'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20개포동%2014-2%20강남구%20건강가정지원센터'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																					
																							<Tr bgcolor=white style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>06143</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								135-916																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('서울특별시%20강남구%20선릉로%20573');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 선릉로 573																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 역삼동 682-27 <span style='color:red;'><b>강남구</b></span> 선거관리위원회																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																573 Seolleung-ro Gangnam-gu Seoul																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20선릉로%20573'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20역삼동%20682-27%20강남구%20선거관리위원회'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																					
																							<Tr bgcolor=E4E9F5 style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>06025</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								135-893																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('서울특별시%20강남구%20논현로158길%2015');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 논현로158길 15																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 신사동 593-33 <span style='color:red;'><b>강남구</b></span> 신사동 ANGEM 빌딩																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																15 Nonhyeon-ro 158-gil Gangnam-gu Seoul																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20논현로158길%2015'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20신사동%20593-33%20강남구%20신사동%20ANGEM%20빌딩'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																					
																							<Tr bgcolor=white style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>06369</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								135-885																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('서울특별시%20강남구%20광평로60길%2022');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 광평로60길 22																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 수서동 721 <span style='color:red;'><b>강남구</b></span> 장애인 직업재활																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																22 Gwangpyeong-ro 60-gil Gangnam-gu Seoul																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20광평로60길%2022'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20수서동%20721%20강남구%20장애인%20직업재활'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																					
																							<Tr bgcolor=E4E9F5 style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>06065</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								135-951																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('서울특별시%20강남구%20선릉로%20706');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 선릉로 706																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 청담동 40-33 <span style='color:red;'><b>강남구</b></span>노인복지회관																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																706 Seolleung-ro Gangnam-gu Seoul																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20선릉로%20706'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20청담동%2040-33%20강남구노인복지회관'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																					
																							<Tr bgcolor=white style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>06088</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								135-864																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('서울특별시%20강남구%20선릉로%20668');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 선릉로 668																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 삼성동 8 <span style='color:red;'><b>강남구</b></span>보건소																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																668 Seolleung-ro Gangnam-gu Seoul																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20선릉로%20668'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20삼성동%208%20강남구보건소'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																					
																							<Tr bgcolor=E4E9F5 style='border-bottom:1px dotted #999;'>
																							<td style="padding-left:15px; padding-top:3px;" align=left height=80 width=7%>
																								<font color=red><b>06288</b></font>
																							</td>
																							<td style="padding-left:5px; padding-top:3px;" align=left height=80 width=8%>
																								135-837																							</td>
																							<td >
																								
																											<table><td height=3></td></table>

																											<table width=100%>
																														<td align=left width=50%>
																															<a href=javascript:sel_kor('서울특별시%20강남구%20삼성로%20154');>

																															<font color=333333 style='font-size:14px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 삼성로 154																															</b>
																															</a>
																														</td>
																														<td align=left width=50%>
																															<font color=333333 style='font-size:13px;font-family:"Nanum Gothic", NanumGothicWeb;'>
																															서울특별시 <span style='color:red;'><b>강남구</b></span> 대치동 509-2 <span style='color:red;'><b>강남구</b></span>의회, <span style='color:red;'><b>강남구</b></span>민회관																														</td>
																														<tr>
																														<td colspan=2 style='padding-top:10px;' align=left>
																															<font color=888888 style='font-size:11px;font-family:"Nanum Gothic", NanumGothicWeb;'>

																																154 Samseong-ro Gangnam-gu Seoul																															</span>
																														</td>
																											</table>


																											</a>


																							</td>

																							<td align=right class=k_message width=140><span class=small style='color:#888888;'>
																								<table><td height=1></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20삼성로%20154'); style='padding:3px;width:133px;'>
																										<i class="fa fa-car"></i> 한글 도로명주소복사
																									</a>

																								<table><td height=5></td></table>

																									<a class="btn btn-default btn-sm" href=javascript:sel_kor(''); style='padding:3px;width:133px;'>
																										<i class="fa fa-font"></i> 영문 도로명주소복사
																									</a>


																								<table><td height=5></td></table>


																									<a class="btn btn-default btn-sm" href=javascript:sel_kor('서울특별시%20강남구%20대치동%20509-2%20강남구의회,%20강남구민회관'); style='padding:3px;width:133px;'>
																										<i class="fa fa-home"></i> 한글 지번주소복사
																									</a>

																								<table><td height=1></td></table>
																							</td>


																							</tr>
																							<tr>
																							<td colspan=8 height=1 bgcolor=eaeaea>
																							</tr>
																																											<tr>
																						<Td colspan=10>

																									<center>
																									<table><Td height=35></td></table>




										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- 새우편번호_페이징_하단_가로 -->
						<ins class="adsbygoogle"
							 style="display:inline-block;width:970px;height:90px"
							 data-ad-client="ca-pub-9907646833488095"
							 data-ad-slot="5875235645"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
				
																									<br><br>

																									<font style='font-size:20pt;'>

																									<font style=font-size:15px;><b>1</b>&nbsp;&nbsp;<font style=font-size:15px;><a href='addr_detail.php?start=8&gbn1=&gbn2=&gbn3=&s_str=강남구&s_gbn=ALL'>2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='addr_detail.php?start=80&gbn1=&gbn2=&gbn3=&s_str=강남구&s_gbn=ALL'>▶▶</a>																										<br>
																										<br>
																						</td>
																						</tr>

																		</table>



						</div>


				<table width=100% bgcolor=eaeaea>
					<td style='padding:10px;color:#888;font-size:11px;'>
					<center>


					본 사이트는 사이트내에 등록 또는 "링크"로 연결된 모든 "자료"에 대한 신뢰성과 안전성에 대한 어떠한 보증도 하지 않으며, <br><br>

					어떠한 책임도 부담하지 않습니다. 사이트내 정보에 대한 책임은 이용자 본인의 책임하에 이용원칙입니다 		
					</td>
				</table>




<!--			<table width=100%>
				<td style='padding-left:5px;padding-bottom:10px;'>
					<font style='font-size: 14px;font-family:"Nanum Gothic", NanumGothicWeb;font:bold;color:#2C719F;'>
						<b>한글로 검색하는 알리익스프레스 해외 직구 <font color=red><b>차이나마켓</font></b></font></b> 
					</font>
				</td>
			</table>
-->

<center>
<!--	<iframe id=top_iframe_banner src=http://china-market.co.kr/ad_gal/top_items_banner_post.php?search_str= frameborder=0 border=0 scrolling=no width=1100 height=343 style='overflow:hidden;left:-100px;'></iframe>-->

</center>




					</div>




				<center>

				<script>
				//	parent.style.height=parent.contentWindow.document.body.scrollHeight+"px";
				</script>


				<script>
				//	document.all.frm2.submit();

				</script>



	</td>
</table>


