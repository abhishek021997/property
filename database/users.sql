CREATE TABLE `propertydetail` (
`id` int NOT NULL,
`propertyType` varchar(100) NOT NULL,
`types` varchar(100) NOT NULL,
`locations` TEXT NOT NULL,
`price` int NOT NULL,
`roomtype` TEXT NOT NULL,
`descriptions` TEXT NOT NULL,
`ownername` TEXT NOT NULL,
`ownercontact` int NOT NULL,
`owneremail` TEXT NOT NULL,
`images` TEXT NOT NULL,
`videos` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
ALTER TABLE `propertydetail`
ADD PRIMARY KEY (`id`);
ALTER TABLE `propertydetail`
MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


CREATE TABLE `student` (
`id` int NOT NULL,
`name` varchar(100) NOT NULL,
`mobile` varchar(100) NOT NULL,
`roomtype` TEXT NOT NULL,
`gender` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
ALTER TABLE `student`
ADD PRIMARY KEY (`id`);
ALTER TABLE `student`
MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;




CREATE TABLE `commer` (
`id` int NOT NULL,
`name` varchar(100) NOT NULL,
`mobile` varchar(100) NOT NULL,
`budget` TEXT NOT NULL,
`purpose` TEXT NOT NULL,
`locations` TEXT NOT NULL,
`rentfor` TEXT NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
ALTER TABLE `commer`
ADD PRIMARY KEY (`id`);
ALTER TABLE `commer`
MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



CREATE TABLE `contect` (
`id` int NOT NULL,
`names` varchar(100) NOT NULL,
`mobile` varchar(100) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
ALTER TABLE `contect`
ADD PRIMARY KEY (`id`);
ALTER TABLE `contect`
MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
