<?php

namespace ScriptCompiler\Compiler;

use ScriptCompiler\Resource;

/**
 * install typescript
 * 		$ sudo npm install -g typescript
 */
class TypeScript extends LanguageCompiler {
	protected $baseLanguage = "js";
	protected $defaults = array(
		// "removeComments"
	);

	public function compile(Resource $resource) {
		$command = "tsc {$this->flags} --outFile {$resource->hash} {$resource->path}";
		$this->execute($command);
	}

}
