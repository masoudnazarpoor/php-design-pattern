<?php


namespace App\Patterns\Chain;

use ReflectionClass;

abstract class Chain
{
	protected $handlers = [];
	protected $handlerResult = [];
	const PASSED_KEY = 'passed';


	public function setNextHandler(Handler $handler): self
	{
		$this->handlers[] = $handler;
		return $this;
	}

	public function handle()
	{
		foreach ($this->handlers as $handler) {
			$handler->work();
			$handlerResponse = array_merge(
				[self::PASSED_KEY => $handler->getPassed()],
				$handler->getAdditional()
			);
			$this->handlerResult[$this->getclassNameFromObj($handler)] = $handlerResponse;
		}
		return [
			'can' => $this->can($this->handlerResult),
			'handlers_result' => $this->handlerResult
		];
	}

	public function can(array $additional)
	{
		return count($additional) ? !!!collect($additional)->where(self::PASSED_KEY, false)->count() : false;
	}

	public function reset()
	{
		$this->handlers = [];
		$this->handlerResult = [];
	}

	public function getHandlerResult(): array
	{
		return $this->handlerResult;
	}

	private function getclassNameFromObj($object): string
	{
		return (new ReflectionClass($object))->getShortName();
	}
}
