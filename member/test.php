
		<ul class="clearfix ggform1 ggform" style='padding:30px;box-sizing:border-box;'>


			<li class="li100">
				<div class="formttl1"><span style="color:red">*</span> 아이디</div>
				<div class="clearfix"><input class="ip_1 join_id ipfl" style='width:260px;ime-mode:disabled' name="userid" id="userid" type="text" value="">  <a href="javascript:checkID(1);" class="bntstyle1">중복체크</a></div>
			</li>

			<li class="mr">
				<div class="formttl1"><span style="color:red">*</span> 비밀번호<span style="font-size:13px;font-weight:400">&nbsp;(6자 ~ 10자 이내)</span></div>
				<div><input name="pwd" id="pwd" class="ip_1" style="width:100%;" type="password"></div>
			</li>

			<li>
				<div class="formttl1"><span style="color:red">*</span> 비밀번호 확인</div>
				<div><input class="ip_1" name="re_pwd" id="re_pwd" style="width:100%;" type="password"></div>
			</li>





			<li class="mr">
				<div class="formttl1"><span style="color:red">*</span> 회원명</div>
				<div><input class="ip_1" name="name" id="name" style="width:100%;" type="text" value="<?=$name?>"></div>
				<span style='font-size:12px;'>※ 실명으로 작성해주시기 바랍니다.</span>
			</li>


			<li class="mr">
				<div class="formttl1"><span style="color:red">*</span> 이메일</div>
				<div>
					<input class="ip_1" name="email01" id="email01" style="width:130px;ime-mode:disabled" type="text" value="<?=$email01?>"> @
					<input class="ip_1 ipmt10" name="email02" id="email02" style="width:130pxpx;ime-mode:disabled" type="text" value="<?=$email02?>" placeholder="직접입력">
					<select class="ipmt10" onchange="document.FRM.email02.value=this.options[this.selectedIndex].value;" style="position:relative; top:-2.5px; padding:20px 0; height:60px;">
						<option value="">:: 직접입력 ::</option>
						<option value="naver.com">naver.com</option>
						<option value="hanmail.net">hanmail.net</option>
						<option value="gmail.com">gmail.com</option>
						<option value="nate.com">nate.com</option>
						<option value="daum.net">daum.net</option>
						<option value="hotmail.com">hotmail.com</option>
					</select>
				</div>
			</li>

			<li>
				<div class="formttl1"><span style="color:red">*</span> 생년월일</div>
				<div ><input style='background:#fff;width:100%' type='text' name='bDate' class='fpicker' value='<?=$bDate?>' readonly></div>
			</li>

			<li class="mr">
				<div class="formttl1"><span style="color:red">*</span> 연락처</div>
				<div class="clearfix">
					<input class="ip_1" name="phone" id="phone" style="width:100%;float:left;" type="text" value="<?=$phone?>" placeholder="연락처">
				</div>
			</li>

			<li>
				<div class="formttl1"><span style="color:red">*</span> 소속명(직장 혹은 사업자명)</div>
				<div class="clearfix">
					<input class="ip_1" name="company" id="company" style="width:100%;float:left;" type="text" value="<?=$company?>" placeholder="(직장 혹은 사업자명)">
				</div>			
			</li>

			<li class="li100" style='margin-bottom:0;'>
				<div class="formttl1"><span style="color:red">*</span> 주소</div>
				<div class="clearfix">
				<input class="ip_1 add001" name="zipcode" id="zipcode" style="width:150px;" type="text" value="<?=$zipcode?>" maxlength='5' placeholder="우편번호" onclick="openDaumPostcode();">&nbsp;&nbsp;&nbsp;<a href="javascript:openDaumPostcode();" class='bntstyle1'>주소찾기</a>
				</div>
				<div>
				<input class="ip_1 add001" name="addr01" id="addr01" type="text" value="<?=$addr01?>" placeholder="기본주소" style='width:49%;'readonly onclick="openDaumPostcode();">
				<input class="ip_1 add001" name="addr02" id="addr02" type="text" value="<?=$addr02?>" placeholder="상세주소" style='width:49%;margin-left:2%;'>
				</div>
			</li>
		</ul>

