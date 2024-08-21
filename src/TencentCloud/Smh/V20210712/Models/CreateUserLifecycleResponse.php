<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserLifecycle返回参数结构体
 *
 * @method string getUserId() 获取用户 ID。
 * @method void setUserId(string $UserId) 设置用户 ID。
 * @method string getIsolateTime() 获取设置的隔离时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(string $IsolateTime) 设置设置的隔离时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestroyTime() 获取设置的销毁时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestroyTime(string $DestroyTime) 设置设置的销毁时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateUserLifecycleResponse extends AbstractModel
{
    /**
     * @var string 用户 ID。
     */
    public $UserId;

    /**
     * @var string 设置的隔离时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string 设置的销毁时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestroyTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UserId 用户 ID。
     * @param string $IsolateTime 设置的隔离时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestroyTime 设置的销毁时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}