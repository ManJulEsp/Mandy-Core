<?php
namespace MandyCore\Domain\Booking\Enums;
enum BookingStatus:string { case Pending='pending'; case Confirmed='confirmed'; case Cancelled='cancelled'; case Completed='completed'; }
