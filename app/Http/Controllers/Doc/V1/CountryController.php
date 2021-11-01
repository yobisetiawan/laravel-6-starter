<?php

/**
 * @OA\Get(
 * path="/api/v1/countries",
 * security={{"bearerAuth":{}}},
 * tags={"Country"}, 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\Get(
 * path="/api/v1/countries/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Country"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\POST(
 * path="/api/v1/countries",
 * security={{"bearerAuth":{}}},
 * tags={"Country"},
 *   @OA\Parameter(ref="#/components/parameters/CountryRequest_title"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\PUT(
 * path="/api/v1/countries/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Country"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 *   @OA\Parameter(ref="#/components/parameters/CountryRequest_title"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

 /**
 * @OA\DELETE(
 * path="/api/v1/countries/{id}",
 * security={{"bearerAuth":{}}},
 * tags={"Country"},
 *   @OA\Parameter(ref="#/components/parameters/OA_id"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */
