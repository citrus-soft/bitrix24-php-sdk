<?php
/*
 * This file is part of the bitrix24-php-sdk package.
 *
 * © Mesilov Maxim <mesilov.maxim@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Bitrix24\Exceptions;

/**
 * Class Bitrix24PaymentRequiredException
 * @package Bitrix24
 */
class Bitrix24ApiException extends Bitrix24Exception
{
	/** @var string|null */
	protected $rawErrorCode;
	/** @var string|null */
	protected $rawErrorDesription;
	/** @var  string|null */
	protected $domain;

	/**
	 * @param string $rawErrorCode
	 * @return Bitrix24ApiException
	 */
	public function setRawErrorCode(?string $rawErrorCode): Bitrix24ApiException
	{
		$this->rawErrorCode = $rawErrorCode;

		return $this;
	}

	/**
	 * @param string $rawErrorDesription
	 * @return Bitrix24ApiException
	 */
	public function setRawErrorDesription(?string $rawErrorDesription): Bitrix24ApiException
	{
		$this->rawErrorDesription = $rawErrorDesription;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getRawErrorCode(): ?string
	{
		return $this->rawErrorCode;
	}

	/**
	 * @return string
	 */
	public function getRawErrorDesription(): ?string
	{
		return $this->rawErrorDesription;
	}

	/**
	 * @param string $domain
	 * @return Bitrix24ApiException
	 */
	public function setDomain(?string $domain): Bitrix24ApiException
	{
		$this->domain = $domain;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getDomain(): ?string
	{
		return $this->domain;
	}
}
