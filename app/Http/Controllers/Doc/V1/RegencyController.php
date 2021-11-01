<?php

/**
 * @OA\Get(
 * path="/api/v1/regencies",
 * security={{"bearerAuth":{}}},
 * tags={"Regency"}, 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\Get(
 * path="/api/v1/regencies/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Regency"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\POST(
 * path="/api/v1/regencies",
 * security={{"bearerAuth":{}}},
 * tags={"Regency"},
 *   @OA\Parameter(ref="#/components/parameters/RegencyRequest_name"),
 *   @OA\Parameter(ref="#/components/parameters/RegencyRequest_parent_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\PUT(
 * path="/api/v1/regencies/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Regency"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 *   @OA\Parameter(ref="#/components/parameters/RegencyRequest_name"), 
 *   @OA\Parameter(ref="#/components/parameters/RegencyRequest_parent_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\DELETE(
 * path="/api/v1/regencies/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Regency"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */
