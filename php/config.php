<?
	// *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

	// Имя
	const NAMEISREQUIRED = true;
	const MSGSNAMEERROR = "⚠ Поле обязательно для заполнения";

	// Телефон
	const TELISREQUIRED = false;
	const MSGSTELERROR = "⚠ Поле обязательно для заполнения";

	// Email
	const EMAILISREQUIRED = false;
	const MSGSEMAILERROR = "⚠ Поле обязательно для заполнения";
	const MSGSEMAILINCORRECT = "⚠ Некорректный почтовый адрес";

	// Текстовое поле
	const TEXTISREQUIRED = false;
	const MSGSTEXTERROR = "⚠ Поле обязательно для заполнения";

	// Файл
	const FILEISREQUIRED = false;
	const MSGSFILEERROR = "⚠ Поле обязательно для заполнения";

	// Соглашение
	const AGGREMENTISREQUIRED = false;
	const MSGSAGGREMENTERROR = "⚠ Поле обязательно для заполнения"; 

	// Сообщение об успешной отправке
	const MSGSSUCCESS = "Сообщение успешно отправлено";

	// *** SMTP *** //

		require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/phpmailer/smtp.php');
		const HOST = 'smtp.mail.me.com';
		const LOGIN = 'nikitanik40658@icloud.com';
		const PASS = 'Ee004c1e0312er34';
		const PORT = '587';

	// *** /SMTP *** //

  // Почта с которой будет приходить письмо
	const SENDER = 'nikitanik40658@icloud.com';
	
	// Почта на которую будет приходить письмо
	const CATCHER = 'nikitanik40658@icloud.com';
	
	// Тема письма
	const SUBJECT = 'ТестовОЧКА';
	
	// Кодировка
  const CHARSET = 'UTF-8';
