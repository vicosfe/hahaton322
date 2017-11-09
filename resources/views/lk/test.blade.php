@extends('lk.wrap')
@section('content')
<!-- ************************************************* -->


<section class="navlkMain">
	<div class="lkLeftMenu">
		<div class="lkLogo">
			<a href="#">WESMO</a>
		</div>
		<div class="lkProfImg" style="background-image: url(/public/images/work6.png);"></div>
		<h3 class="lkUserName">Магомедов Магомед</h3>
		<div class="editUser">
			<a href="#">
				<div class="editUser__left">
					<img src="/public/images/settingsIcons.png" alt="">
				</div>
				<div class="editUser__right">
					<span>Редактировать</span>
				</div>
			</a>
		</div>
		<h3 class="menuLk">МЕНЮ</h3>
		<ul>
			<li>
				<a href="/lk" class="menuActive">
					<div class="navItemLk">
						<div class="navItemLk__left">
							<img src="/public/images/soobhestvoActive.png" alt="">
						</div>
						<div class="navItemLk__right">
							<span>Сообщество университета</span>
						</div>
					</div>
				</a>
			</li>


			<li>
				<a href="/lk/predmets/">
					<div class="navItemLk">
						<div class="navItemLk__left">
							<img src="/public/images/items.png" alt="">
						</div>
						<div class="navItemLk__right">
							<span>Предметы</span>
						</div>
					</div>
				</a>
			</li>


			<li>
				<a href="/lk/practics/">
					<div class="navItemLk">
						<div class="navItemLk__left">
							<img src="/public/images/practic.png" alt="">
						</div>
						<div class="navItemLk__right">
							<span>Практика</span>
						</div>
					</div>
				</a>
			</li>


			<li>
				<a href="/lk/achivment/">
					<div class="navItemLk">
						<div class="navItemLk__left">
							<img src="/public/images/achivments.png" alt="">
						</div>
						<div class="navItemLk__right">
							<span>Очки и достижения</span>
						</div>
					</div>
				</a>
			</li>


		</ul>	

		<div class="supportLk">
			<a href="#">
				<div class="supportLk__left">
					<img src="/public/images/support.png" alt="">
				</div>
				<div class="supportLk__right">
					Тех.поддержка
				</a>
			</div>
		</div>

	</div>
	<div class="lkTopMenu">
		<div class="lkTopMenuWrapper">
			<div class="lkTopMenu__left">
				<img src="/public/images/iconSearch.png" alt="">
				<div class="formLkSearch">
					<form action="">
						<input type="text" placeholder="Поиск по курсам, сообществу, предметам и практики">
					</form>
				</div>
			</div>	
			<div class="lkTopMenu__right">
				<div class="lkTopMenu__right--bell">
					<a href="#"><img src="/public/images/bell.png" alt=""></a>
				</div> 
				<div class="lkTopMenu__right--enter">
					<a href="#"><img src="/public/images/logOut.png" alt=""></a>
				</div>
			</div>
		</div>
		<div class="hrLk"></div>
		<div class="lkTopMenu__bottomSection">
			<div class="lkTopMenu__bottomSection--left">
				<img src="/public/images/dopMenu.png" alt="">
			</div>
			<div class="lkTopMenu__bottomSection--right">
				<span>Популярные</span><i class="fa fa-angle-down" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	<div class="lkMainContent">
		<div class="lkMainContent__wrapper">
			<div class="lkMainContent__wrapper--left">
				<h3>
					<span>
						<img src="/public/images/community.png" alt="">
					</span>
					<span class="lkMainContent__text">СООБЩЕСТВО УНИВЕРСИТЕТА</span>
				</h3>
			</div>

			<div class="lkMainContent__wrapper--right">
				<form action="#" class="formFacultet">
					<select name="selectFacultet">
						<option value="web">Веб-разработка</option>
						<option value="2">Веб-разработка</option>
						<option value="3">Веб-разработка</option>
					</select>	
					<i class="fa fa-angle-down" aria-hidden="true"></i>			
				</form>
			</div>

		</div>
		<div class="hrLk"></div>

		<!-- ************************ -->
		<div class="userInfoItem11">
			<div class="wrapper">
				<div class="INTRO">
					<div class="INTRO__top">
						<span>1.INTRO</span>
						<span class="hour">0.2 HOURS</span>
					</div>	
				</div>
				<div class="INTRO__row">
					<div class="INTRO__row--castleUnlock"><i class="fa fa-unlock" aria-hidden="true"></i></div>
					<div class="nameCourses">
						<a href="#">1.1 HTML5 Intro (free preview)</a>
						<span class="nameCoursesHour">12 min</span>
					</div>
				</div>
			</div>	




			<div class="wrapper">
				<div class="BASICS">
				<div class="BASIC">
				<div class="BASIC__top">
				<span>2.BASIC</span>
							<span class="hour">0.2 HOURS</span>
						</div>	
					</div>
					<div class="BASIC__row">
					<div class="BASIC__row--castlelock"><i class="fa fa-lock" aria-hidden="true"></i></div>
						<div class="nameCourses">
						<a href="#">1.1 HTML5 BASIC (free preview)</a>
							<span class="nameCoursesHour">12 min</span>
						</div>
					</div>
				</div>
			</div>


			<div class="wrapper">
				<div class="ADVANCED">
					<div class="ADVANCED">
						<div class="ADVANCED__top">
							<span>3.ADVANCED</span>
							<span class="hour">0.2 HOURS</span>
						</div>	
					</div>
					<div class="ADVANCED__row">
						<div class="ADVANCED__row--castlelock"><i class="fa fa-lock" aria-hidden="true"></i></div>
						<div class="nameCourses">	
							<a href="#">1.1 HTML5 ADVANCED (free preview)</a>
							<span class="nameCoursesHour">12 min</span>
						</div>
					</div>
				</div>
			</div>


		</div>


		<!-- ********************************* -->



	</div>	
</section>







<!-- ************************************************************************************** -->

@stop
