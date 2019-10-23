<?php


/**
 * function Name [ getModuleName() ]
 * @param string $moduleName
 * @return string
 */

function getModuleName(string $moduleName) {
  return app_path('modules' . DS() . $moduleName . DS());
}

/**
 * function Name [ loadConfigFile() ]
 * @param string $fileName
 * @param string $moduleName
 * @return string
 */


function loadConfigFile(string $fileName, string $moduleName) {
  return getModuleName($moduleName) . 'config' . DS() . $fileName . '.php';
}

/**
 * function Name [ loadRoute() ]
 * @param string $fileName
 * @param string $moduleName
 * @return string
 */


function loadRoute(string $fileName, string $moduleName) {
  return getModuleName($moduleName) . 'routes' . DS() . $fileName . '.php';
}

/**
 * function Name [ loadViews() ]
 * @param string $moduleName
 * @return string
 */


function loadViews(string $moduleName) {
  return getModuleName($moduleName) . 'resources' . DS() . 'views';
}

/**
 * function Name [ loadLang() ]
 * @param string $moduleName
 * @return string
 */


function loadLang(string $moduleName) {
  return getModuleName($moduleName) . 'resources' . DS() . 'lang';
}

/**
 * function Name [ loadMigrations() ]
 * @param string $moduleName
 * @return string
 */

function loadMigrations(string $moduleName) {
  return getModuleName($moduleName) . 'database' . DS() . 'migrations';
}

/**
 * function Name [ DS() ]
 * @return string
 */

function DS() {
    return DIRECTORY_SEPARATOR;
}
