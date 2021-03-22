------ LIST CO ------
SELECT rq.req_number, dl.ff_name, dl.sl_name, ms.status_desc, rq.created_date 
	FROM request rq
		LEFT JOIN delivery dl
			ON dl.request_id = rq.id
		LEFT JOIN m_status ms
			ON ms.id_status = rq.status_id
WHERE rq.company_id = '1';
------ END LIST CO ------


------ LIST FF ------
SELECT rq.id AS rqid, dl.id AS dlid, rq.req_number, mc.company_name AS co_name, dl.sl_name, ms.status_desc, rq.created_date
	FROM request rq
		LEFT JOIN delivery dl
			ON dl.request_id = rq.id
		LEFT JOIN m_company mc
			ON mc.id_company = rq.company_id
		LEFT JOIN m_status ms
			ON ms.id_status = rq.status_id
WHERE dl.ffid = '7';
------ END LIST FF -------


------ LIST SL ------
SELECT rq.req_number, dl.id AS dlid, mc.company_name AS co_name, dl.ff_name, ms.status_desc, rq.created_date
	FROM request rq
		LEFT JOIN m_company mc
			ON mc.id_company = rq.company_id
		LEFT JOIN delivery dl
			ON dl.request_id = rq.id
		LEFT JOIN m_status ms
			ON ms.id_status = rq.status_id
WHERE dl.slid = '8' AND rq.status_id != '1' AND rq.ff_reject != '1';
--NOTIN()
------ END LIST SL -------


SELECT mu.roles_id, mu.company_id, mc.company_name
	FROM m_user mu
		LEFT JOIN m_company mc
			ON mc.id_company = mu.company_id
WHERE mu.roles_id = '1';

SELECT COUNT(rq.status_id) 
	FROM request rq
		LEFT JOIN delivery dl
			ON dl.request_id = rq.id
WHERE rq.status_id = '4' AND dl.ffid = '3';

SELECT mc.id_company, mc.company_name FROM m_company mc WHERE mc.company_name = 'PT. Kline Indonesia';

--TRIGER--
DELIMITER $$
CREATE TRIGGER `db_icargo`.`after_request` AFTER INSERT
	ON `db_icargo`.`request`
	FOR EACH ROW 
BEGIN
	INSERT INTO delivery (request_id, created_by, created_date)
	VALUES (new.id, new.created_by, NOW());
END$$
DELIMITER ;
-- end TRIGER --

SELECT COUNT(rq.status_id) AS status_id
	FROM request rq
		JOIN delivery dl
			ON dl.request_id = rq.id
WHERE rq.status_id = '4' AND dl.ffid = '3'

SELECT rq.id AS rqid, dl.id AS dlid, rq.req_number, mc.company_name AS co_name, dl.sl_name, dl.amount
	FROM request rq
		LEFT JOIN delivery dl
			ON dl.request_id = rq.id
		LEFT JOIN m_company mc
			ON mc.id_company = rq.company_id
		LEFT JOIN m_status ms
			ON ms.id_status = rq.status_id
WHERE dl.id = '1';