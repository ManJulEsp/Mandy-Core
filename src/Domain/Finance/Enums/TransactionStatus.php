<?php
namespace MandyCore\Domain\Finance\Enums;
enum TransactionStatus:string { case Pending='pending'; case Completed='completed'; case Failed='failed'; case Refunded='refunded'; }
