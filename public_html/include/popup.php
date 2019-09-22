<div class="simple-popup-container ticket-popup">
	<div class="simple-popup">
		<div class="ticket-popup-header">
			<div id="close-popup-btn" style="position:absolute;top:9px;right:15px;cursor:pointer;"><img src="<?=SITE_TEMPLATE_PATH?>/files/images/icon-close.png" width="16"></div>
			<div class="ticket-popup-title"></div>
			<img src="" alt="" class="ticket-popup-image">
			<div class="ticket-popup-details-container">
				
			</div>
		</div>
		<div class="ticket-popup-text"></div>
		<a href="" class="ticket-popup-button"></a>
	</div>
</div>

<!--форма заказа мероприятия-->
<div class="simple-popup-container order-ticket-popup order-any-event">
	
	
	
	<div class="simple-popup" id="order-event-popup">
		<div class="menu_closer"></div>
		
	
	
		<div class="title-w-background title-w-background-2 title-bottom">
			<h3 class="title">Заказ мероприятия</h3>
		</div>
		<form action="" id="order_form">
			<div class="form-element">
				<label for="">Тип мероприятия</label>
				<div class="field">
					<div class="styled-select22">
						<select name="type" class="city" id="order-event-type" style="width:100%">
																<option value="all">&nbsp;</option>
															    <option value="6">Частное мероприятие</option>
																<option value="7">Kорпоративное мероприятие</option>
																<option value="8">Выступление</option>
														</select>
					</div>
				</div>
			</div>
			<div class="form-element">
				<label for="">Город</label>
				<div class="field">
					<input name="town" type="text" id="order-event-city" value="">
				</div>
			</div>
			<div class="form-element">
				<label for="">Планируемая дата</label>
				<div class="field">
					<input name="date" type="text" id="order-event-date" value="">
				</div>
			</div>
			<div class="form-element">
				<label for="" class="required">Имя</label>
				<div class="field">
					<input name="name" type="text" id="order-event-name" value="" class="req" emessage="Введите Ваше имя" required>
				</div>
			</div>
			<div class="form-element">
				<label for="" class="required">Телефон</label>
				<div class="field">
					<input name="phone" type="text" id="order-event-phone" value="" class="req" emessage="Введите Ваше телефон" required>
				</div>
			</div>
			<div class="form-element">
				<label for="" class="required">Адрес эл. почты</label>
				<div class="field">
					<input name="email" type="email" id="order-event-email" value="" class="reqemail" emessage="Введите адрес эл. почты" required>
				</div>
			</div>
			<div class="form-element">
				<label for="">Сообщение</label>
				<div class="field">
					<textarea name="txt" id="order-event-message" cols="30" rows="10"></textarea>
				</div>
			</div>
			<div class="text-center">
				<a href="#" class="order-ticket-popup-button" id="order-event-send">Отправить</a>
			</div>
		</form>
	</div>
</div>



<div class="simple-popup-container order-ticket-popup popup-alisa">
	<div class="simple-popup">
		
	</div>
</div>