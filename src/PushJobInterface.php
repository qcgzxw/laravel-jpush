<?php

namespace Mitoop\JPush;

interface PushJobInterface
{
   public function __construct(PushServiceInterface $pushService);

   public function __clone();
}