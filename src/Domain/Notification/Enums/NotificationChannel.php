<?php
namespace MandyCore\Domain\Notification\Enums;
enum NotificationChannel:string { case Email='email'; case InApp='in_app'; case Push='push'; case Sms='sms'; case WhatsApp='whatsapp'; }
