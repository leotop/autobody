<h3>
Поздравляем! Ваш заказ № <?=$arResult['ORDER_ID']?> сформирован и поступил в обработку. <br />
Вам отправлено письмо с подробностями заказа! <br />
В разделе &laquo;<a href="<?=$arParams['URL_ORDER_HISTORY']?>">Мои заказы</a>&raquo; Вы можете просматривать ход выполнения Ваших заказов и производить оплату по безналичному расчету.<br />
<?if ($arResult['NEW_USER']):?>
Кроме того, Вы зарегистрированы в нашем интернет-магазине как новый покупатель. <br />
В дальнейшем процедура оформления заказа будет проще, а Вы сможете получать бонусы и скидки нашего интернет-магазина! <br />
<?endif?>
Спасибо, что воспользовались нашими услугами!
</h3>
