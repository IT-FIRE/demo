<?php
/**
 * --------------------s.wx150408
 * @param	Fires_checkRemoteFileExist	func	���Զ���ļ��Ƿ����
			-----��$found		bool
 * ----------------------------------------------------------------------------e
 */
function Fires_checkRemoteFileExist($url) {
	
	$curl = curl_init($url);
	// ��ȡ������
	curl_setopt($curl, CURLOPT_NOBODY, true);
	// ��������
	$result = curl_exec($curl);
	$found = false;
	// �������û�з���ʧ��
	if ($result !== false) {
		// �ټ��http��Ӧ���Ƿ�Ϊ200
		$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		if ($statusCode == 200) {
			$found = true;
		}
	}
	curl_close($curl);

	return $found;
}