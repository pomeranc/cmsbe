<?php

namespace Cothema\CMSBE\Controls\Grido;

use \Grido\Components\Filters\Filter;

/**
 * Base of Grid
 */
class Grid extends \Grido\Grid {

	public function __construct(\Nette\ComponentModel\IContainer $parent = NULL, $name = NULL) {
		parent::__construct($parent, $name);

		if ($parent->translator instanceof \Kdyby\Translation\Translator) {
			$lang = $parent->translator->getLocale();
			$gridLang = ($lang === 'cz' ? 'cs' : 'en');

			$this->getTranslator()->setLang($gridLang);
		}

		$this->filterRenderType = Filter::RENDER_INNER;
		$this->setExport();
	}

	public function addColumnText($name, $label, $default = TRUE) {
		$column = parent::addColumnText($name, $label);

		if ($default === TRUE) {
			$column->setSortable()
					->setFilterText()
					->setSuggestion();
		}

		return $column;
	}

	public function addColumnLongText($name, $label, $default = TRUE) {
		$column = parent::addColumnText($name, $label);

		if ($default === TRUE) {
			$column
					->setFilterText()
					->setSuggestion();
		}

		return $column;
	}

	public function addColumnDate($name, $label, $dateFormat = NULL, $default = TRUE) {
		$column = parent::addColumnDate($name, $label, $dateFormat);

		if ($default === TRUE) {
			$column->setSortable()
					->setFilterDate();
		}

		return $column;
	}

}
