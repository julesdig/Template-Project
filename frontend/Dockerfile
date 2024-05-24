ARG NODE_VERSION_SET_IMAGE
FROM $NODE_VERSION_SET_IMAGE AS base

# Install dependencies only when needed
FROM base AS deps
# Check https://github.com/nodejs/docker-node/tree/b4117f9333da4138b03a546ec926ef50a31506c3#nodealpine to understand why libc6-compat might be needed.
RUN apk add --no-cache libc6-compat
RUN npm install -g pnpm
WORKDIR /var/www/app

# Install dependencies based on the preferred package manager
COPY package.json yarn.lock* package-lock.json* pnpm-lock.yaml* ./
RUN pnpm install --frozen-lockfile
COPY . .

CMD ["pnpm", "dev"]