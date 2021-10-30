<?php

/**
 * @OA\Get(
 * path="/api/v1/provinces",
 * security={{"bearerAuth":{}}},
 * tags={"Province"}, 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\Get(
 * path="/api/v1/provinces/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Province"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\POST(
 * path="/api/v1/provinces",
 * security={{"bearerAuth":{}}},
 * tags={"Province"},
 *   @OA\Parameter(ref="#/components/parameters/ProvinceRequest_title"),
 *   @OA\Parameter(ref="#/components/parameters/ProvinceRequest_country_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\PUT(
 * path="/api/v1/provinces/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Province"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 *   @OA\Parameter(ref="#/components/parameters/ProvinceRequest_title"), 
 *   @OA\Parameter(ref="#/components/parameters/ProvinceRequest_country_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\DELETE(
 * path="/api/v1/provinces/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Province"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */
