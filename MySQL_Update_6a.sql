CREATE TABLE `DeviceCalibration` (
	`Timestamp` datetime NOT NULL,
        `Name` varchar(64) NOT NULL,
	`ID` INT UNSIGNED NOT NULL,
	`Angle` double NOT NULL,
        `Gravity` double NOT NULL,
	`Temperature` double NOT NULL,
	`Confidence` int,
        `Disabled` tinyint,
	`Comment` varchar(200),
	PRIMARY KEY (`Timestamp`, `Name`, `ID`)
	) 
ENGINE=InnoDB DEFAULT CHARSET=ascii 
COLLATE=ascii_bin COMMENT='iSpindel Calibration Data';
