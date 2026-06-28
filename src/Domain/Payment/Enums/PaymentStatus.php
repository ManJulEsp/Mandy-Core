<?php
namespace MandyCore\Domain\Payment\Enums;
enum PaymentStatus:string { case Pending='pending'; case Authorized='authorized'; case Paid='paid'; case Failed='failed'; case Refunded='refunded'; }
