@extends('lk.wrap')
@section('content')

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
				<a href="#" class="menuActive">
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
				<a href="#">
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
				<a href="#">
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
				<a href="#">
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
		

	</div>
	<div class="lkCenterMenu">
		lorem3000
	</div>	
</section>

	@endsection